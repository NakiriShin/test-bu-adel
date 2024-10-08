<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
</head>
<body>
    <h1>Daftar Dokter</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('dokters.create') }}">Tambah Dokter</a>
    <br>
    <a href="{{ url('/rumahsakit') }}">Kembali ke Rumah Sakit</a> <!-- Link untuk kembali ke rumah sakit -->

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokters as $dokter)
                <tr>
                    <td>{{ $dokter->name }}</td>
                    <td>{{ $dokter->specialization }}</td>
                    <td>{{ $dokter->phone }}</td>
                    <td>
                        <a href="{{ route('dokters.edit', $dokter->id) }}">Edit</a>
                        <form action="{{ route('dokters.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

