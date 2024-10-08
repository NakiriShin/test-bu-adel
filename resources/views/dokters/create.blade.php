<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
</head>
<body>
    <h1>Tambah Dokter</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dokters.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="specialization">Spesialisasi:</label>
            <input type="text" id="specialization" name="specialization" required>
        </div>
        <div>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
