<!-- MEMANGGIL MASTER TEMPLATE YANG SUDAH DIBUAT SEBELUMNYA, YAKNI admin.blade.php -->


<?php $__env->startSection('title'); ?>
    <title>Settings</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Settings</h4>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo e(route('settings.StoreOrUpdate')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="name">Judul</label>
                                        <input type="text" name="key" class="form-control" required>
                                        <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Isi</label>
                                        <input type="text" name="value" class="form-control" required>
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
                                <h4 class="card-title">Settings list</h4>
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
                                                <th>Isi</th>

                                            </tr>
                                        </thead>
                                        <form method="POST">
                                            <?php echo csrf_field(); ?>
                                            <tbody>
                                                <!-- LOOPING DATA KATEGORI SESUAI JUMLAH DATA YANG ADA DI VARIABLE $settings -->
                                                <?php $__empty_1 = true; $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td><?php echo e($val->key); ?></td>
                                                        <td><strong><?php echo e($val->name); ?></strong></td>
                                                        <!-- MENGGUNAKAN TERNARY OPERATOR, UNTUK MENGECEK, JIKA $val->parent ADA MAKA TAMPILKAN NAMA PARENTNYA, SELAIN ITU MAKA TANMPILKAN STRING - -->
                                                        <td id="<?php echo e($val->type . '-' . $val->key); ?>">
                                                            <?php switch($val->type):
                                                                case ('image'): ?>
                                                                    <img src="<?php echo e(url($val->value)); ?>" alt="<?php echo e($val->name); ?>">
                                                                    <br>
                                                                    <hr>
                                                                    <input type="text" class="form-control"
                                                                        value="<?php echo e($val->value); ?>" name="<?php echo e($val->key); ?>">
                                                                <?php break; ?>

                                                                <?php case ('multi_image'): ?>
                                                                    <?php
                                                                    $images = explode(';', $val->value);
                                                                    $i = 1;
                                                                    foreach ($images as $key => $value) {
                                                                        echo '<img src="' . $value . '" width="50%" >';
                                                                        echo '<input type="text" class="mt-2 form-control" value="' . $value . '" name="' . $val->key . '[' . $key . ']">';
                                                                        echo '<hr>';

                                                                        $i++;
                                                                    }
                                                                    ?>
                                                                    <div id="multi-image-container-<?php echo e($val->key); ?>">
                                                                        <!-- Placeholder for new inputs -->
                                                                    </div>
                                                                    <button class="btn btn-primary"
                                                                        onclick="addNewInput(event, '<?php echo e($val->key); ?>')">
                                                                        <i class="fa fa-plus"></i> New
                                                                    </button>
                                                                <?php break; ?>

                                                                <?php case ('text'): ?>
                                                                    <input type="text" value="<?php echo e($val->value); ?>"
                                                                        class="form-control" name="<?php echo e($val->key); ?>">
                                                                <?php break; ?>

                                                                <?php default: ?>
                                                            <?php endswitch; ?>
                                                        </td>

                                                        <script>
                                                            function addNewInput(event, key) {
                                                                // Prevent the default action
                                                                event.preventDefault();

                                                                // Create a new input element
                                                                var newInput = document.createElement('input');
                                                                newInput.setAttribute('type', 'text');
                                                                newInput.setAttribute('class', 'mt-2 form-control');
                                                                newInput.setAttribute('name', key + '[]');

                                                                // Append the new input to the container
                                                                var container = document.getElementById('multi-image-container-' + key);
                                                                container.appendChild(newInput);

                                                                // Optionally, add a horizontal rule for separation
                                                                var hr = document.createElement('hr');
                                                                container.appendChild(hr);
                                                            }
                                                        </script>

                                                    </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <tr>
                                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                            </form>

                                        </table>
                                    </div>
                                    <!-- FUNGSI INI AKAN SECARA OTOMATIS MEN-GENERATE TOMBOL PAGINATION  -->
                                </div>
                            </div>
                        </div>
                        <!-- BAGIAN INI AKAN MENG-HANDLE TABLE LIST CATEGORY  -->
                    </div>
                </div>
            </div>
        </main>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/settings/index.blade.php ENDPATH**/ ?>