@extends('layouts.app')

@section('content')

<div class="container"> 
 
    <h3>Tambah Data Kategori</h3> 
    <form action="{{ url('/kategori') }}" method="POST"> 
        @csrf 
        <div class="form-group">
            <label for=""> NAMA KATEGORI </label>
            <input type="text" name="cat_nama" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="cat_ket" class="form-control">
        </div>
        
        <div class="form-group">
            <input button type="submit" value="SIMPAN" class="btn btn-primary" type="button" active>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="sr-only">Loading...</span>
            </button>
        </div>
    </form> 
 </div> 

@endsection