<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Post::with('kategori')->latest()->paginate(10);
        return view ('post.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = Kategori::all();
        return view('post.add', compact('rows'));
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
            'post_tanggal' => 'bail|required', 
            'post_slug' => 'required',
            'post_title' => 'required',
            'post_ket' => 'required',
            'cat_id' => 'required'
       ], 
       [ 
            'post_tanggal.required' => 'wajib diisi',
            'post_slug.unique' => 'Nama Tahun sudah ada', 
            'post_title.required' => 'wajib diisi',
            'post_ket.required' => 'wajib diisi',
            'cat_id.required' => 'wajib'
       ]); 
            
            Post::create([ 
            'post_tanggal' => $request->post_tanggal, 
            'post_slug' => $request->post_slug,
            'post_title' => $request->post_title,
            'post_ket' => $request->post_ket,
            'cat_id' => $request->cat_id
       ]); 
            
            return redirect('/post');
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
        $row = Kategori::all();
        $rows = Post::with('kategori')->findOrFail($id);
        return view ('post.edit', compact('row', 'rows'));
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
            'post_tanggal' => 'bail|required', 
            'post_slug' => 'required',
            'post_title' => 'required',
            'post_ket' => 'required',
            'cat_id' => 'required'
       ], 
       [ 
            'post_tanggal.required' => 'wajib diisi',
            'post_slug.required' => 'Nama Tahun sudah ada', 
            'post_title.required' => 'wajib diisi',
            'post_ket.required' => 'wajib diisi',
            'cat_id.required' => 'wajib'
       ]); 

       $row = Post::findOrFail($id);
       $row->update([ 
        'post_tanggal' => $request->post_tanggal, 
        'post_slug' => $request->post_slug,
        'post_title' => $request->post_title,
        'post_ket' => $request->post_ket,
        'cat_id' => $request->cat_id
   ]); 
        
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Post::findOrFail($id);
        $row->delete();

        return redirect('/post');
    }
}
