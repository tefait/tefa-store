<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title"></li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('category.index')); ?>">
                <i class="nav-icon icon-tag"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">
                <i class="nav-icon icon-basket"></i> Pesanan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('product.index')); ?>">
                <i class="nav-icon icon-list"></i> Produk
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle">
                <i class="nav-icon icon-docs"></i> Laporan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('report.order')); ?>">
                        <i class="nav-icon icon-doc"></i> Order
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('report.return')); ?>">
                        <i class="nav-icon icon-doc"></i> Pengembalian
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle">
                <i class="nav-icon icon-settings"></i> Pengaturan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('settings')); ?>">
                        <i class="nav-icon icon-puzzle"></i> Toko
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-lock"></i> Logout
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </a>
        </li>

    </ul>

</nav>
<?php /**PATH /home/azfasa15/nginx/tefa-store/resources/views/layouts/module/sidebar.blade.php ENDPATH**/ ?>