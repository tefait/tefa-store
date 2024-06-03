<?php $__env->startSection('title'); ?>
    <title>Dashboard</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Dashboard</h2>
					<div class="page_link">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(route('customer.dashboard')); ?>">Dashboard</a>
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
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Belum Dibayar</h3>
									<hr>
									<p>Rp <?php echo e(number_format($orders[0]->pending)); ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Dikirim</h3>
									<hr>
									<p><?php echo e($orders[0]->shipping); ?> Pesanan</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Selesai</h3>
									<hr>
									<p><?php echo e($orders[0]->completeOrder); ?> Pesanan</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ecommerce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/ecommerce/dashboard.blade.php ENDPATH**/ ?>