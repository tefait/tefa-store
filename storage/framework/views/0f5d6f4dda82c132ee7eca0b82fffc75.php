<?php $__env->startSection('title'); ?>
    <title>Mass Upload</title>
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
                    <?php if(session('success')): ?>
                        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upload Via Excel</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('product.saveBulk')); ?>" method="post" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Pilih</option>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>" <?php echo e(old('category_id') == $row->id ? 'selected':''); ?>><?php echo e($row->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <p class="text-danger"><?php echo e($errors->first('category_id')); ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="file">File Excel</label>
                                    <input type="file" name="file" class="form-control" value="<?php echo e(old('file')); ?>" required>
                                    <p class="text-danger"><?php echo e($errors->first('file')); ?></p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/products/bulk-upload-form.blade.php ENDPATH**/ ?>