<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Rumah Sakit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #72EDF2 10%, #5151E5 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
        }

        /* Card Styling */
        .card {
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #dee2e6; /* Border yang lebih jelas */
        }

        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Button Customization */
        .btn-custom {
            border-radius: 50px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        /* Focus Style */
        .form-control:focus {
            box-shadow: none;
            border-color: #28a745;
        }

        /* Container Border Styling */
        .border-custom {
            border: 3px solid #17a2b8; /* Warna border untuk elemen container */
            border-radius: 20px;
            padding: 20px;
            background-color: white;
            margin-bottom: 40px;
        }

        /* Styling for Footer */
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('rumah_sakits.index') }}">Rumah Sakit CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rumah_sakits.create') }}">Tambah Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dokters.index') }}">Daftar Dokter</a> <!-- Menu Dokter -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content with Border -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Border for the Container -->
                <div class="border-custom">
                    <div class="card">
                        <div class="card-header text-center">
                            @yield('header') <!-- Judul dinamis di sini -->
                        </div>
                        <div class="card-body">
                            @yield('content')

                            <!-- Tombol untuk Tambah Dokter -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 CRUD Rumah Sakit | All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional Custom JS -->
</body>
</html>
