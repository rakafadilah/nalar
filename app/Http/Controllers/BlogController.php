<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Categories;
use App\Models\Tag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all(); 
        return view('blog.index', [
            'blogs'=>$blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mengambil semua data categories dengan query categories all
        $categories = Categories::all();
        // mengambil semua data tags dengan query tags all
        $tags = Tag::all();
        return view('blog.create',[
            'categories'=>$categories,
            'tags'=>$tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validation untuk request form
        $validation = Validator::make($request->all(),[
            "title"=> "required",
            "content"=>"required",
            "image"=>"sometimes|image",
            "categories_id"=>"required",
        ])->validate();

        $blog = new Blog ;
        $blog->title = $request->get('title');
        $blog->slug = Str::slug($request->get('title'));
        $blog->users_id = 1;
        $blog->categories_id = $request->get('categories_id');

        // $blog->tags_id = $request->get('tags_id');
        

        // cara save image ke database
        if($request->file('image')) {
            $file=$request->file('image')->store('blogs','public');
            $blog->image = $file;
        }
        // cara meginput image yang ada dalam tinymce
        // pertama ambil data dari request content
        $content = $request->get('content');
        $dom = new \DOMDocument();
        // lakukan endcode dengan xml 
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        // ambil setiap element dengan tag img
        $images = $dom ->getElementsByTagName('img');
        // lakukan perulangan dari setiap img dan simpan 
        foreach ($images as $k => $img) {
            $image_64 = $img->getAttribute('src');
            $extension = explode('/',explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
            $replace = substr($image_64, 0, strpos($image_64, ',')+1);
            $image = str_replace($replace,'',$image_64);
            $image = str_replace(' ','+',$image);
            $imageName = Str::random(10).'.'.$extension;

            Storage::disk('public')->put('blogs/'.$imageName, base64_decode($image));

            $img->removeAttribute('src');
            $src_path = asset('storage/blogs/'.$imageName);
            $img->setAttribute('src',$src_path);
        }

        $konten = $dom->saveHTML();
        // simpan konten yang sudah diubah
        $blog->content = $konten;
        
        $blog->save();
        //sinkronisasi multiple tag dari form ke database
        //multiple tag dipecah dan diulang
        $tagIds = [];
        foreach($request->get('tags_id') as $tag)
        {
            $tagIds[] = $tag;
        }
        $blog->tags()->sync($tagIds);

        return redirect()->route('blog.index')->with('success','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog= Blog::findOrFail($id);
        $categories = Categories::all();
        $tags = Tag::all();
        $blogtags = BlogTag::where('blog_id',$id)->get();
        $blogtag =[];
        foreach($blogtags as $bt){
            $blogtag[] = $bt->tag_id;
        }
        return view('blog.edit',[
            'blog'=> $blog,
            'categories'=>$categories,
            'tags'=>$tags,
            'blogtag'=>$blogtag,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $validation = Validator::make($request->all(),[
            "title"=> "required",
            "content"=>"required",
            "image"=>"sometimes",
            "categories_id"=>"required",
        ])->validate(); 
 
        $blog= Blog ::findOrFail($id);
        $blog->title = $request->get('title');
        $blog->slug = Str::slug($request->get('title'));
        $blog->users_id = 1;
        $blog->categories_id = $request->get('categories_id');

        //cek apakah ada file di dalam post
        if($request->file('image')) {
            //jika terdapat file dan di dalam data juga sudah terdapat image maka hapus yang lama di ganti yang baru
            if($blog->image && file_exists(storage_path('app/public/'.$blog->image))) {
                Storage::delete('public/'.$blog->image);
                $file = $request->file('image')->store('blogs','public');
                $blog->image = $file;
            //jika tidak ada image di dalam data maka input baru image nya 
            } else {
                $file = $request->file('image')->store('blogs','public');
                $blog->image = $file;
            }
           
        }  
        
        $content = $request->get('content');
        $dom = new \DOMDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom ->getElementsByTagName('img');

        foreach ($images as $k => $img) {
            $image_64 = $img->getAttribute('src');

            if (substr($image_64, 0,5) == 'data:'){
                $extension = explode('/',explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
                $replace = substr($image_64, 0, strpos($image_64, ',')+1);
                $image = str_replace($replace,'',$image_64);
                $image = str_replace(' ','+',$image);
                $imageName = Str::random(10).'.'.$extension;

                Storage::disk('public')->put('blogs/'.$imageName, base64_decode($image));

                $img->removeAttribute('src');
                $src_path = asset('storage/blogs/'.$imageName);
                $img->setAttribute('src',$src_path);
            }
        }

        $konten = $dom->saveHTML();
        $blog->content = $konten;

        $blog->save();

        $tagIds = [];
        foreach($request->get('tags_id') as $tag)
        {
            $tagIds[] = $tag;
        }
        $blog->tags()->sync($tagIds);

        
        return redirect()->route('blog.index')->with('success','success');
    }   
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog= Blog ::findOrFail($id);
        //jika terdapar image di dalam data maka hapus image tersebut
        if($blog->image && file_exists(storage_path('app/public/'.$blog->image))) {
            Storage::delete('public/'.$blog->image);
        }
        $blog->delete();

        return redirect()->route('blog.index');

    }
}
