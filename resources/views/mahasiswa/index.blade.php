@extends('layouts.app')

@section('content')
    <div class="container"> 
 
        <h3>
            Daftar Mahasiswa
            <a href="{{ url('/mahasiswa/create') }}" class="btn btn-warning float-right">Tambah Data</a>
        </h3> 
 
        <table class= "table table-bordered"> 
            <tr> 
                <th>NIM</th> 
                <th>NAMA</th> 
                <th>JURUSAN</th> 
                <th>ALAMAT</th> 
                <th>EDIT</th> 
                <th>DELETE</th> 
            </tr> 
            @foreach($rows as $row) 
            <tr> 
                <td>{{ $row->mhsw_nim }}</td> 
                <td>{{ $row->mhsw_nama }}</td> 
                <td>{{ $row->mhsw_jurusan }}</td> 
                <td>{{ $row->mhsw_alamat }}</td> 
                <td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}" class="btn btn-primary"> Edit</a></td>
                <td>
                    <form action="{{ url('/mahasiswa/' . $row->mhsw_id) }}" method="POST">
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