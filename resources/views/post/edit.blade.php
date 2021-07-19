@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Post</h3>
    <form action="{{ url('/post/' . $rows->post_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf 

        <div class="form-group">
            <label for=""> TANGGAL </label>
            <input type="date" name="post_tanggal" class="form-control" value="{{ $rows->post_tanggal }}">
        </div>

        <div class="form-group">
            <label for=""> SLUG </label>
            <input type="text" name="post_slug" class="form-control" value="{{ $rows->post_slug }}">
        </div>

        <div class="form-group">
            <label for=""> TITLE </label>
            <input type="text" name="post_title" class="form-control" value="{{ $rows->post_title}}">
        </div>
        
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="post_ket" class="form-control" value="{{ $rows->post_ket }}">
        </div>

        <div class="form-group">
            <label for=""> KATEGORI ID </label>
            <select class ="form-control select2" style="width: 100%;" name="cat_id" id="cat_id" value="{{ $rows->cat_id }}">
                <option disabled value> Pilih </option>
                @foreach ($rows as $row)
                <option value="{{ $rows->cat_id }}"> {{$rows->cat_id }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input button type="submit" value="UPDATE" class="btn btn-primary">
        </div>
 
    </form>
</div>

@endsection