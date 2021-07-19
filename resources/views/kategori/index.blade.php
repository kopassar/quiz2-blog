@extends('layouts.app')

@section('content')
    <div class="container"> 
 
        <h3>
            Daftar Kategori
            <a href="{{ url('/kategori/create') }}" class="btn btn-warning float-right">Tambah Data</a>
        </h3> 
 
        <table class= "table table-bordered"> 
            <tr> 
                <th>NO.</th>
                <th>KATEGORI NAMA</th> 
                <th>KATEGORI KETERANGAN</th> 
                <th>EDIT</th> 
                <th>DELETE</th> 
            </tr> 
            @foreach($rows as $row) 
            <tr> 
                <td>{{ $loop->iteration}}</td>
                <td>{{ $row->cat_nama }}</td> 
                <td>{{ $row->cat_ket }}</td> 
                <td><a href="{{ url('kategori/' . $row->cat_id . '/edit') }}" class="btn btn-primary"> Edit</a></td>
                <td>
                    <form action="{{ url('/kategori/' . $row->cat_id) }}" method="POST">
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