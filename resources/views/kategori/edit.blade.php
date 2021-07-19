@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Kategori</h3>
    <form action="{{ url('/kategori/' . $row->cat_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf 

        <div class="form-group">
            <label for=""> KATEGORI NAMA </label>
            <input type="text" name="cat_nama" class="form-control" value="{{ $row->cat_nama }}">
        </div>
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="cat_ket" class="form-control" value="{{ $row->cat_ket }}">
        </div>

        <div class="form-group">
            <input button type="submit" value="UPDATE" class="btn btn-primary">
 
    </form>
</div>

@endsection