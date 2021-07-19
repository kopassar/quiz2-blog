@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Mahasiswa</h3>
    <form action="{{ url('/mahasiswa/' . $row->mhsw_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf 

        <div class="form-group">
            <label for=""> NIM </label>
            <input type="text" name="mhsw_nim" class="form-control" value="{{ $row->mhsw_nim }}">
        </div>
        <div class="form-group">
            <label for=""> NAMA</label>
            <input type="text" name="mhsw_nama" class="form-control" value="{{ $row->mhsw_nama }}">
        </div>
        <div class="form-group">
            <label for=""> JURUSAN </label>
            <input type="text" name="mhsw_jurusan" class="form-control" value="{{ $row->mhsw_jurusan }}">
        </div>
        <div class="form-group">
            <label for=""> ALAMAT </label>
            <textarea name="mhsw_alamat" cols="30" rows="5" class="form-control" >{{ $row->mhsw_alamat }}</textarea>
        </div>

        <div class="form-group">
            <input button type="submit" value="UPDATE" class="btn btn-primary">
 
    </form>
</div>

@endsection