<form method="POST">
    @csrf
    <div id="multi_image-carousel-image">
        <input type="text">

    </div>
    <script>
        var iterator = 1;

        function addNewInput(event, key, parent) {
            // Prevent the default action
            event.preventDefault();

            // Create a new input element
            var newInput = document.createElement("input");
            newInput.setAttribute("type", "text");
            newInput.setAttribute("class", "mt-2 form-control");
            newInput.setAttribute("name", `${key}[${iterator}]`);
            newInput.setAttribute("value", "url");
            iterator += 1;

            // Append the new input to the container
            var container = document.getElementById(parent);
            container.appendChild(newInput);

            // Optionally, add a horizontal rule for separation
            var hr = document.createElement("hr");
            container.appendChild(hr);
        }
    </script>
    <button class="btn btn-primary" onclick="addNewInput(event, 'carousel-image', 'multi_image-carousel-image')">
        <i class="fa fa-plus"></i> New
    </button>
    <button>submit</button>
</form>
