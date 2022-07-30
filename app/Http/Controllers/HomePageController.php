<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Homepage::all(); 
        return view('home.index', [
            'homes' => $homes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
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

        $homes =new Homepage() ;
        $homes->title = $request->get('title');
        $homes->subtitle = $request->get('subtitle');
        $homes->title1 = $request->get('title1');
        $homes->subtitle1 = $request->get('subtitle1');
        $homes->title2 = $request->get('title2');
        $homes->subtitle2 = $request->get('subtitle2');
        $homes->title3 = $request->get('title3');
        $homes->subtitle3 = $request->get('subtitle3');

        if($request->file('image')) {
            $file=$request->file('image')->store('homes','public');
            $homes->image = $file;
        }

        $homes->save();
        return redirect()->route('home.index')->with('success','success');
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
        $homes= Homepage::findOrFail($id);

        return view('home.edit',[
           'homes' => $homes,
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

        $homes = Homepage::findOrFail($id);
        $homes->title = $request->get('title');
        $homes->subtitle = $request->get('subtitle');
        $homes->title1 = $request->get('title1');
        $homes->subtitle1 = $request->get('subtitle1');
        $homes->title2 = $request->get('title2');
        $homes->subtitle2 = $request->get('subtitle2');
        $homes->title3 = $request->get('title3');
        $homes->subtitle3 = $request->get('subtitle3');

        if($request->file('image')) {
            //jika terdapat file dan di dalam data juga sudah terdapat image maka hapus yang lama di ganti yang baru
            if($homes->image && file_exists(storage_path('app/public/'.$homes->image))) {
                Storage::delete('public/'.$homes->image);
                $file = $request->file('image')->store('homes','public');
                $homes->image = $file;
              
            //jika tidak ada image di dalam data maka input baru image nya 
            } else {
                $file = $request->file('image')->store('homes','public');
                $homes->image = $file;
            }
        }  

        $homes->save();
        return redirect()->route('home.index')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homes = Homepage::findOrFail($id);

        $homes->delete();
 
        return redirect()->route('home.index');
    }
}
