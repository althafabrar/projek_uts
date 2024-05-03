<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <div class="container-fluid p-0">
            <div class="bg-image" style="background-image: url('https://img.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_23-2148433740.jpg'); background-size: 60vh; height: 85vh;">
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                    <h1 class="text-white mb-4 display-4 fw-bold">WELCOME</h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card bg-light text-dark shadow">
                                    <div class="card-body">
                                        <p class="lead mb-4"><strong>Biodata Mahasiswa:</strong></p>
                                        <div class="text-center">
                                            <img class="img-fluid rounded-circle mb-3" width="500" height="200" src="{{ Vite::asset('resources/images/profile sementara.jpg') }}" alt="image">
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><strong>Nama:</strong> Althaf Abrar Hardiansyah</li>
                                            <li><strong>Kelas:</strong> SI 05-03</li>
                                            <li><strong>NIM:</strong> 1204220098</li>
                                            <li><strong>Prodi:</strong> Sistem Informasi</li>
                                            <li><strong>Kampus:</strong> University Telkom Surabaya</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-4 mt-4">
                        <div class="d-grid gap-2">
                            <a class="btn btn-dark bi bi-house-check-fill mt-2 me-2" href="{{ route('home') }}"> Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @vite('resources/js/app.js')
</body>
</html>
