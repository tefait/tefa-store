<ul class="nav navbar-nav center_nav pull-right">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('front.product') }}">Produk</a>
    </li>
    <li class="nav-item submenu dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Shop</a>
        <ul class="dropdown-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">Shop Category</a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
    </li>
</ul>
