
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo e(asset('assets/logo2.png')); ?>" width="89"
            height="25" alt="">
        <img class="navbar-brand-minimized" src="<?php echo e(asset('assets/logo2.png')); ?>" width="30"
            height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <img class="img-avatar" src="<?php echo e(asset('assets/img/user.png')); ?>" alt="<?php echo e(auth()->user()->email); ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>

            </div>
        </li>
    </ul>
</header>
<?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/layouts/module/header.blade.php ENDPATH**/ ?>