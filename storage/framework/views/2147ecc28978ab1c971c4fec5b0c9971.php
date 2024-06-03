<?php $__env->startSection('title'); ?>
    <title>Konfirmasi Pembayaran</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Konfirmasi Pembayaran</h2>
                    <div class="page_link">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(route('customer.orders')); ?>">Konfirmasi Pembayaran</a>
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
                                    <h4 class="card-title">Konfirmasi Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo e(route('customer.savePayment')); ?>" enctype="multipart/form-data"
                                        method="post">
                                        <?php echo csrf_field(); ?>

                                        <?php if(session('success')): ?>
                                            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                        <?php endif; ?>
                                        <?php if(session('error')): ?>
                                            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label for="">Invoice ID</label>
                                            <input type="text" name="invoice" class="form-control"
                                                value="<?php echo e(request()->invoice); ?>" required>
                                            <p class="text-danger"><?php echo e($errors->first('invoice')); ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Pengirim</label>
                                            <input type="text" name="name" class="form-control"
                                                value="<?php echo e(auth('customer')->user()->name); ?>">
                                            <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Transfer Ke</label>
                                            <select name="transfer_to" class="form-control" required>
                                                <option>Pilih</option>
                                                <option value="cash">Cash</option>
                                                <option value="qris">QRIS</option>
                                            </select>
                                            <p class="text-danger"><?php echo e($errors->first('transfer_to')); ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Transfer</label>
                                            <input type="number" name="amount" class="form-control" required
                                                value="<?php echo e(request()->p); ?>">
                                            <p class="text-danger"><?php echo e($errors->first('amount')); ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Transfer</label>
                                            <input type="text" name="transfer_date" id="transfer_date"
                                                class="form-control" required>
                                            <p class="text-danger"><?php echo e($errors->first('transfer_date')); ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Bukti Transfer</label>
                                            <input type="file" name="proof" class="form-control" required>
                                            <p class="text-danger"><?php echo e($errors->first('proof')); ?></p>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm">Konfirmasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#transfer_date').datepicker({
            "todayHighlight": true,
            "setDate": new Date(),
            "autoclose": true
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ecommerce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/ecommerce/payment.blade.php ENDPATH**/ ?>