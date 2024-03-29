<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\FrontPage;
use Facade\FlareClient\Stacktrace\Frame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\NodeVisitor\FindingVisitor;

class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = FrontPage::all();
        return view('pages.index', [
            'pages' => $pages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('pages.create',[
            'categories' => $categories,
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
        //
        $validation = Validator::make($request->all(),[
            "title"=> "required",
            "subtitle"=> "required",
            "image"=>"sometimes|image",
            "categories_id"=>"required",
        ])->validate();

        $pages = new FrontPage() ;
        $pages->title = $request->get('title');
        $pages->subtitle = $request->get('subtitle');
        $pages->categories_id = $request->get('categories_id');

        if($request->file('image')) {
            $file=$request->file('image')->store('frontpages','public');
            $pages->image = $file;
        }


        $pages->save();
        return redirect()->route('pages.index')->with('success','success');

        
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
        $pages= FrontPage::findOrFail($id);
        $categories= Categories ::all();


        return view('pages.edit',[
            'pages' => $pages,
            'categories' => $categories,
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
        //
        $validation = Validator::make($request->all(),[
            "title"=> "required",
            "subtitle"=> "required",
            "image"=>"sometimes",
            "categories_id"=>"required",
        ])->validate();

        $pages = FrontPage::findOrFail($id) ;
        $pages->title = $request->get('title');
        $pages->subtitle = $request->get('subtitle');
        $pages->categories_id = $request->get('categories_id');

       
        if($request->file('image')) {
            //jika terdapat file dan di dalam data juga sudah terdapat image maka hapus yang lama di ganti yang baru
            if($pages->image && file_exists(storage_path('app/public/'.$pages->image))) {
                Storage::delete('public/'.$pages->image);
                $file = $request->file('image')->store('frontpages','public');
                $pages->image = $file;
            //jika tidak ada image di dalam data maka input baru image nya 
            } else {
                $file = $request->file('image')->store('frontpages','public');
                $pages->image = $file;
            }
           
        }  


        $pages->save();
        return redirect()->route('pages.index')->with('success','success');

        
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pages = FrontPage::findOrFail($id);

       $pages->delete();

       return redirect()->route('pages.index');

    }
}
