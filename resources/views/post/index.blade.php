@extends('layouts.app')

@section('content')
    <div class="container"> 
 
        <h3>
            Daftar Post
            <a href="{{ url('/post/create') }}" class="btn btn-warning float-right">Tambah Data</a>
        </h3> 
 
        <table class= "table table-bordered"> 
            <tr> 
                <th>NO.</th>
                <th>TANGGAL</th> 
                <th>SLUG</th> 
                <th>TITLE</th>
                <th>KETERANGAN</th>
                <th>KATEGORI ID</th>
                <th>EDIT</th>
                <th>DELETE</th> 
            </tr> 
            @foreach($rows as $row) 
            <tr> 
                <td>{{ $loop->iteration}}</td>
                <td>{{ $row->post_tanggal }}</td> 
                <td>{{ $row->post_slug }}</td>
                <td>{{ $row->post_title }}</td> 
                <td>{{ $row->post_ket }}</td> 
                <td>{{ $row->cat_id }}</td>  
                <td><a href="{{ url('post/' . $row->post_id . '/edit') }}" class="btn btn-primary"> Edit</a></td>
                <td>
                    <form action="{{ url('/post/' . $row->post_id) }}" method="POST">
                        <input name="_method" type="hidden" value="DELETE"> 
                        @csrf 
                        
                        <button class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')">Delete</button>
                        
                    </form>
                </td>
            </tr> 
        @endforeach 
    </table> 
</div> 
@endsection