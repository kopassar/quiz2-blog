<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kategori::all();
        return view ('kategori.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'cat_nama' => 'bail|required', 
            'cat_ket' => 'required' 
       ], 
       [ 
            'cat_nama.required' => 'wajib diisi',
            'cat_nama.unique' => 'Nama Tahun sudah ada', 
            'cat_ket.required' => 'wajib diisi'  
       ]); 
            
            Kategori::create([ 
            'cat_nama' => $request->cat_nama, 
            'cat_ket' => $request->cat_ket
       ]); 
            
            return redirect('/kategori');
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
        $row = Kategori::findOrFail($id);
        return view ('kategori.edit', compact('row'));
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
        $request->validate([ 
            'cat_nama' => 'bail|required', 
            'cat_ket' => 'required' 
    ], 
    [ 
            'cat_nama.required' => 'nama wajib diisi',  
            'cat_ket.required' => 'keterangan wajib diisi' 
    ]); 
         
    $row = Kategori::findOrFail($id); 
    $row->update([ 
            'cat_nama' => $request->cat_nama, 
            'cat_ket' => $request->cat_ket
    ]); 
            return redirect('/kategori'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Kategori::findOrFail($id);
        $row->delete();

        return redirect('/kategori');
    }
}
