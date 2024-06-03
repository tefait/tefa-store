<?php $__env->startSection('title'); ?>
    <title>Login</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-5">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>

                                <input class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                    type="text"
                                    name="email"
                                    placeholder="Email Address"
                                    value="<?php echo e(old('email')); ?>"
                                    autofocus
                                    required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required>
                            </div>
                            <div class="row">
                                <?php if(session('error')): ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo e(session('error')); ?>

                                    </div>
                                </div>
                                <?php endif; ?>

                                <div class="col-6">
                                    <button class="btn btn-primary px-4">Login</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary p-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tefa-store\resources\views/auth/login.blade.php ENDPATH**/ ?>