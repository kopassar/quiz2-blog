@extends('layouts.app')

@section('content')

<div class="container"> 
 
    <h3>Tambah Data Post</h3> 
    <form action="{{ url('/post') }}" method="POST"> 
        @csrf 
        <div class="form-group">
            <label for=""> TANGGAL </label>
            <input type="date" name="post_tanggal" class="form-control">
        </div>

        <div class="form-group">
            <label for=""> SLUG </label>
            <input type="text" name="post_slug" class="form-control">
        </div>

        <div class="form-group">
            <label for=""> TITLE </label>
            <input type="text" name="post_title" class="form-control">
        </div>
        
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="post_ket" class="form-control">
        </div>

        <div class="form-group">
            <label for=""> KATEGORI ID </label>
            <select class ="form-control select2" style="width: 100%;" name="cat_id" id="cat_id">
                <option disabled value> Pilih </option>
                @foreach ($rows as $row)
                <option value="{{ $row->cat_id }}"> {{$row->cat_id}}</option>
                @endforeach
            </select>
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