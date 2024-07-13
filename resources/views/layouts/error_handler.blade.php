<script defer id="alert">
    document.addEventListener('DOMContentLoaded', async (event) => {
        @foreach ($errors->all() as $error)
            await window.Toast.fire({
                icon: "error",
                title: "{{ $error }}",
            });
        @endforeach

        @if ($error = Session::get('kesalahan'))
            await window.Toast.fire({
                icon: "error",
                title: "{{ $error }}",
            });
        @endif

        @if ($sukses = Session::get('sukses'))
            await window.Toast.fire({
                icon: "success",
                title: "{{ $sukses }}",
            });
        @endif

        document.getElementById("alert").remove();
    });
</script>
