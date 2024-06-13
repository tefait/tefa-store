<div class="bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30" role="alert">
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Icon -->
            <span
                class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </span>
            <!-- End Icon -->
        </div>
        <div class="ms-3">
            <h3 class="text-gray-800 font-semibold dark:text-white">
                Error!
            </h3>
            <p class="text-sm text-gray-700 dark:text-neutral-400">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>
