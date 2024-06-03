<?php $__env->startSection('title'); ?>
    <title>List Product</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Product</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    List Product
                                    <div class="float-right">
                                        <a href="<?php echo e(route('product.bulk')); ?>" class="btn btn-danger btn-sm">Mass Upload</a>
                                        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary btn-sm">Tambah</a>
                                    </div>
                                </h4>
                            </div>
                            <div class="card-body">
                                <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                <?php endif; ?>

                                <?php if(session('error')): ?>
                                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                <?php endif; ?>
                                <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->

                                <!-- BUAT FORM UNTUK PENCARIAN, METHODNYA ADALAH GET -->
                                <form action="<?php echo e(route('product.index')); ?>" method="get">
                                    <div class="input-group mb-3 col-md-3 float-right">
                                        <!-- KEMUDIAN NAME-NYA ADALAH Q YANG AKAN MENAMPUNG DATA PENCARIAN -->
                                        <input type="text" name="q" class="form-control" placeholder="Cari..."
                                            value="<?php echo e(request()->q); ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">Cari</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- TABLE UNTUK MENAMPILKAN DATA PRODUK -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- LOOPING DATA TERSEBUT MENGGUNAKAN FORELSE -->
                                            <!-- ADAPUN PENJELASAN ADA PADA ARTIKEL SEBELUMNYA -->
                                            <?php $__empty_1 = true; $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(Storage::url($row->image)); ?>"
                                                            width="100px" height="100px" alt="<?php echo e($row->name); ?>">
                                                    </td>
                                                    <td>
                                                        <strong><?php echo e($row->name); ?></strong><br>
                                                        <!-- ADAPUN NAMA KATEGORINYA DIAMBIL DARI HASIL RELASI PRODUK DAN KATEGORI -->
                                                        <label>Kategori: <span
                                                                class="badge badge-info"><?php echo e($row->category->name); ?></span></label><br>
                                                        <label>Berat: <span class="badge badge-info"><?php echo e($row->weight); ?>

                                                                gr</span></label>
                                                    </td>
                                                    <td>Rp <?php echo e(number_format($row->price)); ?></td>
                                                    <td><?php echo e($row->created_at !== null ? $row->created_at->format('d-m-Y') : '-'); ?></td>

                                                    <!-- KARENA BERISI HTML MAKA KITA GUNAKAN { !! UNTUK MENCETAK DATA -->
                                                    <td><?php echo $row->status_label; ?></td>
                                                    <td>
                                                        <!-- FORM UNTUK MENGHAPUS DATA PRODUK -->
                                                        <form action="<?php echo e(route('product.destroy', $row->id)); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <a href="<?php echo e(route('product.edit', $row->id)); ?>"
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
                                <!-- MEMBUAT LINK PAGINASI JIKA ADA -->
                                <?php echo $product->links(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/products/index.blade.php ENDPATH**/ ?>