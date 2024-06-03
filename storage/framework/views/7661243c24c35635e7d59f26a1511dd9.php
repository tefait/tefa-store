<?php $__env->startSection('title'); ?>
    <title>Daftar Pesanan</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Orders</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Daftar Pesanan
                            </h4>
                        </div>
                        <div class="card-body">
                            <?php if(session('success')): ?>
                                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                            <?php endif; ?>

                            <?php if(session('error')): ?>
                                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                            <?php endif; ?>

                            <form action="<?php echo e(route('orders.index')); ?>" method="get">
                                <div class="input-group mb-3 col-md-6 float-right">
                                    <select name="status" class="form-control mr-3">
                                        <option value="">Pilih Status</option>
                                        <option value="0">Baru</option>
                                        <option value="1">Confirm</option>
                                        <option value="2">Proses</option>
                                        <option value="3">Dikirim</option>
                                        <option value="4">Selesai</option>
                                    </select>
                                    <input type="text" name="q" class="form-control" placeholder="Cari..." value="<?php echo e(request()->q); ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>InvoiceID</th>
                                            <th>Pelanggan</th>
                                            <th>Subtotal</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><strong><?php echo e($row->invoice); ?></strong></td>
                                            <td>
                                                <strong><?php echo e($row->customer_name); ?></strong><br>
                                                <label><strong>Telp:</strong> <?php echo e($row->customer_phone); ?></label><br>
                                                <label><strong>Alamat:</strong> <?php echo e($row->customer_address); ?> <?php echo e($row->customer->district->name); ?> - <?php echo e($row->customer->district->city->name); ?>, <?php echo e($row->customer->district->city->province->name); ?></label>
                                            </td>
                                            <td>Rp <?php echo e(number_format($row->subtotal)); ?></td>
                                            <td><?php echo e($row->created_at->format('d-m-Y')); ?></td>
                                            <td>
                                                <?php echo $row->status_label; ?> <br>
                                                <?php if($row->return_count > 0): ?>
                                                    <a href="<?php echo e(route('orders.return', $row->invoice)); ?>">Permintaan Return</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <form action="<?php echo e(route('orders.destroy', $row->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <a href="<?php echo e(route('orders.view', $row->invoice)); ?>" class="btn btn-warning btn-sm">Lihat</a>
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo $orders->links(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/orders/index.blade.php ENDPATH**/ ?>