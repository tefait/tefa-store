<!-- Off canvas Cart -->
<div id="hs-overlay-right"
    class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-[400ms] transform h-full max-w-full sm:max-w-sm 2xl:max-w-md w-full z-[200] bg-white dark:bg-black dark:border-neutral-700"
    tabindex="-1">
    <div class="flex justify-between items-center px-4 py-3 shadow-md dark:border dark:border-neutral-800">
        <h3 class="text-base font-bold text-gray-800 dark:text-white">
            Keranjang
        </h3>
        <button type="button"
            class="flex justify-center items-center text-sm font-semibold text-gray-800 rounded-full border border-transparent size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            data-hs-overlay="#hs-overlay-right">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <div class="flex justify-between items-center px-4 mb-4 max-w-full h-9 border-b dark:border-neutral-800">
        <p class="inline-flex gap-x-2 items-center text-xs text-gray-600 dark:text-gray-300" id="jumlahProduk">
        </p>
        <button type="submit"
            class="inline-flex gap-x-2 items-center text-xs font-semibold text-red-600 duration-300 dark:text-red-500 hover:text-opacity-60 dark:hover:text-opacity-60">
            Hapus semua
        </button>
    </div>

    <!-- Stepper -->
    @include('components.navbar.stepper')
    <!-- End Stepper -->

    <div class="divide-y-8 divide-gray-100 dark:divide-neutral-900
        max-h-[calc(100vh-300px)] sm:max-h-[calc(100vh-250px)] overflow-y-auto
        overflow-x-hidden [&::-webkit-scrollbar]:w-2
        [&::-webkit-scrollbar-track]:rounded-full
        [&::-webkit-scrollbar-track]:bg-gray-100
        [&::-webkit-scrollbar-thumb]:rounded-full
        [&::-webkit-scrollbar-thumb]:bg-gray-300
        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
        data-hs-accordion-always-open id="CartWrapper">
    </div>
    <nav class="fixed bottom-0 z-20 w-full border-gray-200 start-0">
        <div
            class="flex justify-between items-center px-4 max-w-full h-10 bg-purple-100 rounded-t-lg border border-purple-600">
            <span class="inline-flex gap-x-2 items-center text-sm text-purple-700">
                <i class="text-2xl bx bxs-package"></i>
                <p>Ayo checkout belanjaanmu sekarang!</p>
            </span>
        </div>
        <div class="flex justify-between items-center px-4 py-2 bg-white dark:bg-black">
            <h4 class="text-sm text-gray-800 dark:text-white">Total
                <span class="text-base font-bold" id="tH">
                    <span id=""></span>
                </span>
            </h4>
            <form action="#" method="">
                @csrf
                <a type="submit" id="btnP"
                    class="inline-flex gap-x-3 justify-center items-center px-7 py-5 h-9 text-sm font-semibold text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                </a>
            </form>
        </div>
    </nav>
</div>
<script>
    // Get Cart
    let box = document.querySelector("#CartWrapper");
    getCarts();
    async function getCarts() {
        fetch('{{ route('api.list_cart') }}') // Replace 'your_api_endpoint' with your actual API endpoint
            .then(response => response.json())
            .then(data => {

                console.log(data);
                box.innerHTML = "";
                // Check if data.carts exists and is an object
                let cartsCount = Object.keys(data.carts).length;
                let buyBtn = document.getElementById("btnP");

                if (data.success && typeof data.carts === 'object') {
                    document.getElementById("tH").innerText = "";
                    if (cartsCount > 0) {
                        document.getElementById("tH").innerText = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(data.subtotal);
                        buyBtn.innerText = `Beli (${Object.keys(data.carts).length})`
                        @auth('customer')
                        buyBtn.setAttribute("href", "{{ route('front.checkout') }}");
                        @else
                        buyBtn.setAttribute("href", "{{ route('customer.register') }}");
                        @endauth
                        
                        document.getElementById("jumlahProduk").innerText =
                            `${cartsCount === 0 ? "Tidak ada" : cartsCount} Produk`;
                        document.getElementById('ocbtn').insertAdjacentHTML('afterbegin', `
                             <span class="flex absolute top-0 end-0 mt-0.5 me-[5px]">
                                <span class="relative inline-flex bg-red-500 text-white rounded-full py-[1px] px-[5px]"
                                    style="font-size: 10px; line-height:14px;">
                                    ${Object.keys(data.carts).length}</span></span>`);
                        ``;
                    } else {
                        buyBtn.innerText = `Lanjut`;
                        buyBtn.classList.add("hidden");
                    }

                    Object.keys(data.carts).forEach(key => {
                        const cartItem = data.carts[key];
                        // Create a new div element
                        let newDiv = document.createElement('div');

                        newDiv.classList.add('flex', 'gap-y-6', 'p-4', 'transition-all', 'group',
                            'size-full',
                            'dark:bg-black');
                        newDiv.innerHTML = `
                        <img src="${cartItem.product_image}" alt="" class="mr-3 h-20 rounded-lg">
                        <div class="w-full">
                            <div>
                                <p class="text-gray-600 dark:text-neutral-300 max-w-[16rem] truncate text-[14px]">${cartItem.product_name}</p>
                                <p class="block text-sm font-bold text-gray-800 dark:text-white">${new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(cartItem.product_price)}</p>
                            </div>
                            <div class="flex justify-between">
                                <div class="inline-block px-1 py-1 mt-2 bg-white rounded-3xl border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                    <div class="flex gap-x-1.5 items-center">
                                        <button type="button" class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-input-number-decrement="">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                            </svg>
                                        </button>
                                        <input class="p-0 w-8 text-sm text-center text-gray-800 bg-transparent border-0 focus:ring-0 dark:text-white" type="text"  min="1" value="${cartItem.qty}" data-hs-input-number-input="">
                                        <button type="button" class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-input-number-increment="">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5v14"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button class="flex items-center mt-2" onclick="removeCart(${cartItem.product_id})">
                                    <i class="text-xl text-red-600 duration-300 bx bx-trash dark:text-red-500 hover:text-opacity-60 dark:hover:text-opacity-60"></i>
                                </button>
                            </div>
                        </div>`;

                        // Append the new div element to #CartWrapper
                        box.appendChild(newDiv);
                    });
                } else {
                    console.error('Invalid data format: data.carts is not an object or success is false');
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });


    }
    async function removeCart(id) {
        try {
            const response = await fetch("{{ route('api.destroy_cart') }}", {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF protection
                },
                body: JSON.stringify({
                    id: id
                })
            });

            if (response.ok) {
                // Handle success response
                getCarts();
            } else {
                console.error('Failed to remove cart item:', response.statusText);
            }
        } catch (error) {
            console.error('Error removing cart item:', error);
        }
    }
    async function addToCart() {}
</script>
<!-- End Off canvas Cart -->