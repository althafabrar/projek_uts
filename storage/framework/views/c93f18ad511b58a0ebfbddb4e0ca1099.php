<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <div class="container mt-4">
        <div class="row mb-0 ">
          <div class="col-lg-4 col-xl-5 position-absolute top-10 start-0 ">
            <h4 class="mb-3">List Barang</h4>
            <div class="col-lg-3 col-xl-3">
              <div class="d-grid gap-2">
                  <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">Create Employee</a>
              </div>
            </div>
            <div class="table border p-3 rounded-3">
              <table class="table table-bordered table-hover table-secondary mb-0 bg-white ">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Deskripsi</th>
                    <th>Satuan ID</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($barangs->kode_barang); ?></td>
                    <td><?php echo e($barangs->nama_barang); ?></td>
                    <td><?php echo e($barangs->harga_barang); ?></td>
                    <td><?php echo e($barangs->deskripsi_barang); ?></td>
                    <td><?php echo e($barangs->satuan_id); ?></td>
                    
                    <td>
                      <div class="d-flex">
                        <a href="<?php echo e(route('employees.edit', ['employee' => $barangs->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                        <div>
                          <form action="<?php echo e(route('employees.destroy', ['employee' => 3])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-8 col-xl-9 d-flex align-items-start">
            <img width="1100" height="800" src="<?php echo e(Vite::asset('resources/images/produk-bertumpuk.png')); ?>" class="position-absolute top-10 end-0 mt-4 me-4 w-70 p-3 img-fluid" alt="Image">
          </div>
        </div>
      </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html><?php /**PATH C:\Users\Administrator\masterBarangUts\resources\views/employee/index.blade.php ENDPATH**/ ?>