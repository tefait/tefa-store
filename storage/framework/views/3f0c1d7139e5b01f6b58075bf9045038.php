<?php $__env->startSection('title'); ?>
    <title>Order <?php echo e($order->invoice); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Order <?php echo e($order->invoice); ?></h2>
                    <div class="page_link">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(route('customer.orders')); ?>">Order <?php echo e($order->invoice); ?></a>
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pelanggan</h4>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td width="30%">Nama Lengkap</td>
                                            <td width="5%">:</td>
                                            <th><?php echo e($order->customer_name); ?></th>
                                        </tr>
                                        <tr>
                                            <td>No Telp</td>
                                            <td>:</td>
                                            <th><?php echo e($order->customer_phone); ?></th>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <th><?php echo e($order->customer_address); ?>, <?php echo e($order->district->name); ?>

                                                <?php echo e($order->district->city->name); ?>,
                                                <?php echo e($order->district->city->province->name); ?></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Pembayaran

                                        <?php if($order->status == 0): ?>
                                            <a href="<?php echo e(url('member/payment?invoice=' . $order->invoice . '&p=' . $order->subtotal)); ?>"
                                                class="btn btn-primary btn-sm float-right">Konfirmasi</a>
                                        <?php endif; ?>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <?php if($order->payment): ?>
                                        <table>
                                            <tr>
                                                <td width="30%">Nama Pengirim</td>
                                                <td width="5%"></td>
                                                <td><?php echo e($order->payment->name); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Transfer</td>
                                                <td></td>
                                                <td><?php echo e($order->payment->transfer_date); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Transfer</td>
                                                <td></td>
                                                <td>Rp <?php echo e(number_format($order->payment->amount)); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tujuan Transfer</td>
                                                <td></td>
                                                <td><?php echo e($order->payment->transfer_to); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Bukti Transfer</td>
                                                <td></td>
                                                <td>
                                                    <img src="<?php echo e(asset('storage/payment/' . $order->payment->proof)); ?>"
                                                        width="50px" height="50px" alt="">
                                                    <a href="<?php echo e(asset('storage/payment/' . $order->payment->proof)); ?>"
                                                        target="_blank">Lihat Detail</a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php else: ?>
                                        <h4 class="text-center">Belum ada data pembayaran</h4>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Detail</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nama Produk</th>
                                                    <th>Harga</th>
                                                    <th>Quantity</th>
                                                    <th>Berat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td><?php echo e($row->product->name); ?></td>
                                                        <td><?php echo e(number_format($row->price)); ?></td>
                                                        <td><?php echo e($row->qty); ?> Item</td>
                                                        <td><?php echo e($row->weight); ?> gr</td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td colspan="4" class="text-center">Tidak ada data</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
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

<?php echo $__env->make('layouts.ecommerce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/ecommerce/orders/view.blade.php ENDPATH**/ ?>