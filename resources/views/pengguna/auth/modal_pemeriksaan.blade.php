{{-- Modal Pemeriksaan --}}
<div id="hs-modal-pemeriksaan"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-20 overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="relative w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="absolute top-4 end-4">
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-modal-pemeriksaan">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-4 sm:p-6 text-center overflow-y-auto">
                <!-- Icon -->
                <span
                    class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 text-primary dark:bg-blue-700 dark:border-blue-600 dark:text-blue-100">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </span>
                <!-- End Icon -->

                <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Pastikan data Anda benar
                </h3>
                <p class="text-gray-500 dark:text-neutral-500">
                    Apakah data Anda sudah benar? jika ya silahkan klik daftar
                </p>

                <div class="mt-6 flex justify-center gap-x-4">
                    <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-modal-pemeriksaan">
                        <div
                            class="relative w-44 px-4 py-2 rounded-full font-medium text-sm text-primary bg-white isolation-auto z-10 border-[1.5px] border-primary before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full hover:text-white before:bg-gradient-to-r before:from-primary before:to-secondary before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden duration-700 before:hover:duration-700">
                            <p class="text-sm">Batal</p>
                        </div>
                    </button>
                    <button type="submit" class="flex-shrink-0" id="submitButton">
                        <div
                            class="inline-flex justify-center items-center w-44 px-4 py-2 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                            <p class="text-sm">Daftar</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('submitButton').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Clear previous error messages
        document.querySelectorAll('.text-red-500').forEach(el => el.textContent = '');

        // Combine data from form1 and form2
        const form1Data = new FormData(document.getElementById('form1'));
        for (let [key, value] of(new FormData(document.getElementById('form2'))).entries()) {
            form1Data.append(key, value);
        }

        // Create XMLHttpRequest object to send data
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route('customer.register') }}');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest'); // Set header for AJAX request

        xhr.onload = function() {
            if (xhr.status === 200) {
                window.Toast.fire({
                    icon: "success",
                    title: "Berhasil Registrasi",
                });
                window.HSOverlay.close("#hs-modal-pemeriksaan")

                window.location.href = "{{ route('customer.post_login') }}"; // Redirect on success
            } else {
                console.log(xhr.responseText);
                const parsedJSON = JSON.parse(xhr.responseText);
                const errors = parsedJSON.errors;
                if (errors !== undefined) {
                    for (const key in errors) {
                        window.Toast.fire({
                            icon: "error",
                            title: errors[key][0],
                        });

                    }
                } else {
                    window.Swal.fire({
                        icon: "error",
                        title: parsedJSON.error,
                    });
                }
                window.HSOverlay.close("#hs-modal-pemeriksaan")

                // window.Toast.fire({
                //     icon: "error",
                //     title: "Gagal Registrasi",
                // });
            }
        };

        xhr.send(form1Data);
    });
</script>

{{-- End Modal Pemeriksaan --}}
