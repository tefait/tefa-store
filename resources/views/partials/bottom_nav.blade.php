<div class="fixed bottom-0 left-0 w-full z-[199] bg-white dark:bg-black lg:hidden"
    style="box-shadow: 0 0px 8px rgba(0, 0, 0, 0.1);"  >
    <nav class="flex justify-around py-1.5">
      <a href="{{ route('home') }}" class="flex flex-col justify-center w-16 bottom-nav-item text-primary">
        <i class="bx bxs-home text-[26px] text-center"></i>
        <p class="text-xs text-center bottom-nav-label">Beranda</p>
      </a>
      <a href="{{ route('product.index') }}" class="flex flex-col justify-center w-16 bottom-nav-item text-neutral-500">
        <i class="bx bxs-store text-[26px] text-center"></i>
        <p class="text-xs text-center bottom-nav-label">Toko</p>
      </a>
      <a href="#" class="flex flex-col justify-center w-16 bottom-nav-item text-neutral-500">
        <i class="bx bxs-notepad text-[26px] text-center"></i>
        <p class="text-xs text-center bottom-nav-label">Pesanan</p>
      </a>
      <a href="/favorit" class="flex flex-col justify-center w-16 bottom-nav-item text-neutral-500">
        <i class="bx bxs-heart text-[26px] text-center"></i>
        <p class="text-xs text-center bottom-nav-label">Favorit</p>
      </a>
      <a href="#" class="flex flex-col justify-center w-16 bottom-nav-item text-neutral-500">
        <i class="bx bxs-user text-[26px] text-center"></i>
        <p class="text-xs text-center bottom-nav-label">Akun Saya</p>
      </a>
    </nav>
</div>
  