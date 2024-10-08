@extends('layout')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Daftar Rumah Sakit</h2>
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rumah_sakits as $rumah_sakit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rumah_sakit->nama }}</td>
                        <td>{{ $rumah_sakit->alamat }}</td>
                        <td>{{ $rumah_sakit->no_telepon }}</td>
                        <td>
                            <a href="{{ route('rumah_sakits.edit', $rumah_sakit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('rumah_sakits.destroy', $rumah_sakit->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
