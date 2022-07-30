<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
            $images = Image::all(); 
            return view('image.index', [
                'images' => $images
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "title"=> "required",
            "image"=>"sometimes|image",
        ])->validate();

        $image =new Image() ;
        $image->title = $request->get('title');

        if($request->file('image')) {
            $file=$request->file('image')->store('image','public');
            $image->image = $file;
        }

        $image->save();
        return redirect()->route('image.index')->with('success','success');
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
        $image= Image::findOrFail($id);

        return view('image.edit',[
           'image' => $image,
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
            "image"=>"sometimes",
        ])->validate();

        $image = Image::findOrFail($id) ;
        $image->title = $request->get('title');

       
        if($request->file('image')) {
            //jika terdapat file dan di dalam data juga sudah terdapat image maka hapus yang lama di ganti yang baru
            if($image->image && file_exists(storage_path('app/public/'.$image->image))) {
                Storage::delete('public/'.$image->image);
                $file = $request->file('image')->store('image','public');
                $image->image = $file;
              
            //jika tidak ada image di dalam data maka input baru image nya 
            } else {
                $file = $request->file('image')->store('image','public');
                $image->image = $file;
            }
        }  

        $image->save();
        return redirect()->route('image.index')->with('success','success');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);

       $image->delete();

       return redirect()->route('image.index');
    }
}
