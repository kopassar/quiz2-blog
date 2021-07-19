@extends('layouts.app')

@section('content')

<div class="container"> 
 
    <h3>Tambah Data Mahasiswa</h3> 
    <form action="{{ url('/mahasiswa') }}" method="POST"> 
        @csrf 
        <div class="form-group">
            <label for=""> NIM </label>
            <input type="text" name="mhsw_nim" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> NAMA</label>
            <input type="text" name="mhsw_nama" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> JURUSAN </label>
            <input type="text" name="mhsw_jurusan" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> ALAMAT </label>
            <textarea name="mhsw_alamat" cols="30" rows="5" class="form-control"></textarea>
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