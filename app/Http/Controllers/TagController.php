<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cara memanggil semua data tags
        $tags = Tag::all(); 
        
    
        // cara untuk mengirim variable ke view
        return view('tags.index',[
            'tags'=>$tags
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // langsung arahkan ke view karena tags tidak memangil data apapun ke create view
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create object dengan memanggil model
        $tag = new Tag;
        // field name diisi dengan request name dari form create view
        $tag->name = $request->get('name');
        // field slug diisi dengan generate slug dari request name
        $tag->slug = Str::slug($request->get('name'));
        // setelah field terisi lakukan save untuk menyimpan kedalam table
        $tag->save();
        // setelah save selesai redirect ke route index 
        return redirect()->route('tags.index');
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
        // cara mengambil data berdasarkan id menggunakan findOrFail
        $tag= Tag::findOrFail($id);
        // cara kirim variable ke edit view
        return view('tags.edit', [
            'tag'=> $tag
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
        // cara update data dengan mengambil data berdasarkan id
        $tag = Tag::findOrFail($id);
        $tag->name = $request->get('name');
        $tag->slug = Str::slug($request->get('name'));
        $tag->save();

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        // cara menghapus 1 row data
        $tag->delete();
        
        return redirect()->route('tags.index');
    }
}
