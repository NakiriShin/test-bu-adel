@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-warning text-white text-center">
                    <h4 class="mb-0">Edit Rumah Sakit</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('rumah_sakits.update', $rumah_sakit->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama Rumah Sakit</label>
                            <input type="text" name="nama" class="form-control" value="{{ $rumah_sakit->nama }}" placeholder="Masukkan nama rumah sakit" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $rumah_sakit->alamat }}" placeholder="Masukkan alamat" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" value="{{ $rumah_sakit->no_telepon }}" placeholder="Masukkan nomor telepon" required>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                            <a href="{{ route('rumah_sakits.index') }}" class="btn btn-secondary px-4">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
