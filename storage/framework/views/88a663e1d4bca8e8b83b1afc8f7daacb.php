<!-- MEMANGGIL MASTER TEMPLATE YANG SUDAH DIBUAT SEBELUMNYA, YAKNI admin.blade.php -->


<?php $__env->startSection('title'); ?>
    <title>List Kategori</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Kategori</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">

                    <!-- BAGIAN INI AKAN MENG-HANDLE FORM INPUT NEW CATEGORY  -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Kategori Baru</h4>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo e(route('category.store')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="name">Kategori</label>
                                        <input type="text" name="name" class="form-control" required>
                                        <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_id">Kategori</label>
                                        <!-- VARIABLE $PARENT PADA METHOD INDEX KITA GUNAKAN DISINI -->
                                        <!-- UNTUK MENAMPILKAN DATA CATEGORY YANG PARENT_ID NYA NULL -->
                                        <!-- UNTUK DIPILIH SEBAGAI PARENT TAPI SIFATNYA OPTIONAL -->
                                        <select name="parent_id" class="form-control">
                                            <option value="">None</option>
                                            <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Tambah</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- BAGIAN INI AKAN MENG-HANDLE FORM INPUT NEW CATEGORY  -->

                    <!-- BAGIAN INI AKAN MENG-HANDLE TABLE LIST CATEGORY  -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Kategori</h4>
                            </div>
                            <div class="card-body">
                                <!-- KETIKA ADA SESSION SUCCESS  -->
                                <?php if(session('success')): ?>
                                    <!-- MAKA TAMPILKAN ALERT SUCCESS -->
                                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                <?php endif; ?>

                                <!-- KETIKA ADA SESSION ERROR  -->
                                <?php if(session('error')): ?>
                                    <!-- MAKA TAMPILKAN ALERT DANGER -->
                                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                <?php endif; ?>

                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Dibuat pada</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- LOOPING DATA KATEGORI SESUAI JUMLAH DATA YANG ADA DI VARIABLE $CATEGORY -->
                                            <?php $__empty_1 = true; $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td></td>
                                                    <td><strong><?php echo e($val->name); ?></strong></td>

                                                    <!-- MENGGUNAKAN TERNARY OPERATOR, UNTUK MENGECEK, JIKA $val->parent ADA MAKA TAMPILKAN NAMA PARENTNYA, SELAIN ITU MAKA TANMPILKAN STRING - -->
                                                    <td><?php echo e($val->parent ? $val->parent->name : '-'); ?></td>

                                                    <!-- FORMAT TANGGAL KETIKA KATEGORI DIINPUT SESUAI FORMAT INDONESIA -->
                                                    <td><?php echo e($val->created_at->format('d-m-Y')); ?></td>
                                                    <td>

                                                        <!-- FORM ACTION UNTUK METHOD DELETE -->
                                                        <form action="<?php echo e(route('category.destroy', $val->id)); ?>"
                                                            method="post">

                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <a href="<?php echo e(route('category.edit', $val->id)); ?>"
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- FUNGSI INI AKAN SECARA OTOMATIS MEN-GENERATE TOMBOL PAGINATION  -->
                                <?php echo $category->links(); ?>

                            </div>
                        </div>
                    </div>
                    <!-- BAGIAN INI AKAN MENG-HANDLE TABLE LIST CATEGORY  -->
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/categories/index.blade.php ENDPATH**/ ?>