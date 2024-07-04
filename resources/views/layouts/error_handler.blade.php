<script defer id="alert">
    document.addEventListener('DOMContentLoaded', (event) => {
        @foreach ($errors->all() as $error)
            window.Toast.fire({
                icon: "error",
                title: "{{ $error }}",
            });
        @endforeach
        document.getElementById("alert").remove();
    });
</script>
