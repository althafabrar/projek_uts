<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger text-light">
        <div class="container">
            <a class="navbar-brand mb-0 h1"><i class="bi bi-shop"></i> Data Master Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link">List Barang</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <div class="bg-image" style="background-image: url('https://source.unsplash.com/random/1600x900/?technology,computer'); background-size: cover; height: 100vh;">
            <div class="position-absolute top-50 start-50 translate-middle text-center">
                <h1 class="text-white mb-4 display-4 fw-bold">Welcome to Website</h1>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-light btn-lg me-3" href="#products">Products</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h2 id="products" class="text-center mb-5">Products</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <img class="card-img-top" src="https://source.unsplash.com/random/300x200/?product1" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <img class="card-img-top" src="https://source.unsplash.com/random/300x200/?product2" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <img class="card-img-top" src="https://source.unsplash.com/random/300x200/?product3" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="#">Learn More</a>
                        </div>
                    </div>
                </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\Administrator\masterBarangUts\resources\views/home.blade.php ENDPATH**/ ?>