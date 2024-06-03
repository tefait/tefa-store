<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">

    <?php echo $__env->yieldContent('title'); ?>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha256-eSi1q2PG6J7g7ib17yAaWMcrr5GrtohYChqibrV7PBE=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.5.0/css/font-awesome.min.css"
        integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.2.0/dist/assets/owl.carousel.min.css"
        integrity="sha256-ymMA1/kGhlQxXn0q9DFzHRt3VIY1Eh7BJcEfM3I88a4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplelightbox@2.14/dist/simple-lightbox.min.css"
        integrity="sha256-ng8HIWt+GfNEXZQG0L7QBCsNfLq8VTGFTGvlMlT0CsA=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/linearicons@1.0.2/dist/web-font/style.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"
        integrity="sha256-X7rrn44l1+AUO65h1LGALBbOc5C5bOstSYsNlv9MhT8=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-ui@1.13.3/themes/base/theme.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('ecommerce/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ecommerce/css/responsive.css')); ?>">
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container-fluid">
                <div class="float-left">
                    <p>Inovasi Digital untuk Masa Depan</p>
                </div>
                <div class="float-right">
                    <ul class="right_side">
                        <?php if(auth()->guard('customer')->check()): ?>
                            <li><a href="<?php echo e(route('customer.logout')); ?>">Logout</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('customer.login')); ?>">Login</a></li>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li><a href="<?php echo e(route('customer.dashboard')); ?>">My Account</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(route('login')); ?>">Panel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?php echo e(url('/')); ?>">
                        <img src="https://Tefa IT.id/front/theme/images/logo-head.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row w-100">
                            <div class="col-lg-7 pr-0">
                                <?php echo $__env->make('layouts.ecommerce.module.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="col-lg-5">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                    <hr>
                                    <li class="nav-item">
                                        <a href="#" class="icons">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <hr>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('customer.dashboard')); ?>" class="icons">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <hr>

                                    <hr>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('front.cart')); ?>" class="icons">
                                            <i class="lnr lnr lnr-cart"></i>
                                        </a>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <?php echo $__env->yieldContent('content'); ?>

    <!--================ Subscription Area ================-->
    
    <!--================ End Subscription Area ================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Us</h6>
                        <p>
                            Tefa RPL SMKN 2 Sumedang adalah tempat siswa belajar dan berinovasi dalam bidang Rekayasa Perangkat Lunak. Kami mencetak generasi digital kreatif dan berdaya saing.</p>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget f_social_wd">
                        <h6 class="footer_title">Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="f_social">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-12 footer-text text-center">
                    Copyright tefa it &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha256-/ijcOLwFf26xEYAjW75FizKVo5tnTYiQddPZoLUHHZ8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha256-3gQJhtmj7YnV1fmtbVcnAV6eI4ws0Tr48bVZCThtCGQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"
        integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"
        integrity="sha256-uJhTN8Fnqk5uUpb/pv0ojmW81ODaj4JDlyb5Yfb3M9o=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"
        integrity="sha256-lqvxZrPLtfffUl2G/e7szqSvPBILGbwmsGE1MKlOi0Q=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simplelightbox@2.14.3/dist/simple-lightbox.min.js"
        integrity="sha256-NRMGvtPp/+ljYVhBZZk+3NQNvEqNLn0rAtTODPuUylw=" crossorigin="anonymous"></script>

    
    <script src="<?php echo e(asset('ecommerce/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ecommerce/vendors/counter-up/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ecommerce/vendors/flipclock/timer.js')); ?>"></script>
    <script src="<?php echo e(asset('ecommerce/js/mail-script.js')); ?>"></script>
    <script src="<?php echo e(asset('ecommerce/js/theme.js')); ?>"></script>

    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/layouts/ecommerce.blade.php ENDPATH**/ ?>