<?php $__env->startSection('title'); ?>
    <title>Edit Produk</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Product</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">

                <!-- PASTIKAN MENGIRIMKAN ID PADA ROUTE YANG DIGUNAKAN -->
                <form action="<?php echo e(route('product.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <!-- KARENA UPDATE MAKA KITA GUNAKAN DIRECTIVE DIBAWAH INI -->
                    <?php echo method_field('PUT'); ?>

                    <!-- FORM INI SAMA DENGAN CREATE, YANG BERBEDA HANYA ADA TAMBAHKAN VALUE UNTUK MASING-MASING INPUTAN  -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Produk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" name="name" class="form-control"
                                            value="<?php echo e($product->name); ?>" required>
                                        <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="description" class="form-control"><?php echo e($product->description); ?></textarea>
                                        <p class="text-danger"><?php echo e($errors->first('description')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="1" <?php echo e($product->status == '1' ? 'selected' : ''); ?>>Publish
                                            </option>
                                            <option value="0" <?php echo e($product->status == '0' ? 'selected' : ''); ?>>Draft
                                            </option>
                                        </select>
                                        <p class="text-danger"><?php echo e($errors->first('status')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Kategori</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Pilih</option>
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->id); ?>"
                                                    <?php echo e($product->category_id == $row->id ? 'selected' : ''); ?>>
                                                    <?php echo e($row->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <p class="text-danger"><?php echo e($errors->first('category_id')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" name="price" class="form-control"
                                            value="<?php echo e($product->price); ?>" required>
                                        <p class="text-danger"><?php echo e($errors->first('price')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Berat</label>
                                        <input type="number" name="weight" class="form-control"
                                            value="<?php echo e($product->weight); ?>" required>
                                        <p class="text-danger"><?php echo e($errors->first('weight')); ?></p>
                                    </div>

                                    <!-- GAMBAR TIDAK LAGI WAJIB, JIKA DIISI MAKA GAMBAR AKAN DIGANTI, JIKA DIBIARKAN KOSONG MAKA GAMBAR TIDAK AKAN DIUPDATE -->
                                    <div class="form-group">
                                        <label for="image">Foto Produk</label>
                                        <br>
                                        <!--  TAMPILKAN GAMBAR SAAT INI -->
                                        <img src="<?php echo e(Storage::url($product->image)); ?>" width="100px"
                                            height="100px" alt="<?php echo e($product->name); ?>">
                                        <hr>
                                        <input type="file" name="image" class="form-control">
                                        <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                        <p class="text-danger"><?php echo e($errors->first('image')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/products/edit.blade.php ENDPATH**/ ?>