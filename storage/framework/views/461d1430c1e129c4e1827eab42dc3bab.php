<?php $__env->startSection('title'); ?>
    <title>List Pesanan</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>List Pesanan</h2>
                    <div class="page_link">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(route('customer.orders')); ?>">List Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php echo $__env->make('layouts.ecommerce.module.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Pesanan</h4>
                                </div>
                                <div class="card-body">
                                    <?php if(session('error')): ?>
                                        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                        <?php endif; ?>
                                        <?php if(session('success')): ?>
                                            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                        <?php endif; ?>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>Penerima</th>
                                                    <th>No Telp</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Tanggal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td>
                                                            <strong><?php echo e($row->invoice); ?></strong><br>
                                                            <?php if($row->return_count == 1): ?>
                                                            <small>Return: <?php echo $row->return->status_label; ?></small>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($row->customer_name); ?></td>
                                                        <td><?php echo e($row->customer_phone); ?></td>
                                                        <td><?php echo e(number_format($row->total)); ?></td>
                                                        <td><?php echo $row->status_label; ?></td>
                                                        <td><?php echo e($row->created_at); ?></td>
                                                        <td>
                                                            <form action="<?php echo e(route('customer.order_accept')); ?>"
                                                                class="form-inline"
                                                                onsubmit="return confirm('Kamu Yakin?');" method="post">
                                                                <?php echo csrf_field(); ?>

                                                                <a href="<?php echo e(route('customer.view_order', $row->invoice)); ?>"
                                                                    class="btn btn-primary btn-sm mr-1">Detail</a>
                                                                <input type="hidden" name="order_id"
                                                                    value="<?php echo e($row->id); ?>">

                                                                <?php if($row->status == 3 && $row->return_count == 0): ?>
                                                                    <button class="btn btn-success btn-sm">Terima</button>
                                                                    <a href="<?php echo e(route('customer.order_return', $row->invoice)); ?>"
                                                                        class="btn btn-danger btn-sm mt-1">Return</a>
                                                                <?php endif; ?>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td colspan="7" class="text-center">Tidak ada pesanan</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="float-right">
                                        <?php echo $orders->links(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ecommerce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/ecommerce/orders/index.blade.php ENDPATH**/ ?>