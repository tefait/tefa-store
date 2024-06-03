<?php $__env->startSection('title'); ?>
    <title>Laporan Return</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Laporan Return</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Laporan Return
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                <?php endif; ?>

                                <?php if(session('error')): ?>
                                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                <?php endif; ?>

                                <form action="<?php echo e(route('report.return')); ?>" method="get">
                                    <div class="input-group mb-3 col-md-4 float-right">
                                        <input type="text" id="created_at" name="date" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Filter</button>
                                        </div>
                                        <a target="_blank" class="btn btn-primary ml-2" id="exportpdf">Export PDF</a>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><strong><?php echo e($row->invoice); ?></strong></td>
                                                    <td>
                                                        <strong><?php echo e($row->customer_name); ?></strong><br>
                                                        <label><strong>Telp:</strong> <?php echo e($row->customer_phone); ?></label><br>
                                                        <label><strong>Alamat:</strong> <?php echo e($row->customer_address); ?>

                                                            <?php echo e($row->customer->district->name); ?> -
                                                            <?php echo e($row->customer->district->city->name); ?>,
                                                            <?php echo e($row->customer->district->city->province->name); ?></label>
                                                    </td>
                                                    <td>Rp <?php echo e(number_format($row->subtotal)); ?></td>
                                                    <td><?php echo e($row->created_at->format('d-m-Y')); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">Tidak ada data</td>
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
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(document).ready(function() {
            let start = moment().startOf('month')
            let end = moment().endOf('month')

            $('#exportpdf').attr('href', '/administrator/reports/return/pdf/' + start.format('YYYY-MM-DD') + '+' +
                end.format('YYYY-MM-DD'))

            $('#created_at').daterangepicker({
                startDate: start,
                endDate: end
            }, function(first, last) {
                $('#exportpdf').attr('href', '/administrator/reports/return/pdf/' + first.format(
                    'YYYY-MM-DD') + '+' + last.format('YYYY-MM-DD'))
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/report/return.blade.php ENDPATH**/ ?>