@extends('layouts.admin')

@section('title')
    <title>Settings</title>
@endsection

@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Settings list</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    @csrf
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                    <th>Nama</th>
                                                    <th>Isi</th>
                                                    <th></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($settings as $key => $val)
                                                    <tr>
                                                        <td>{{ $val->key }}</td>
                                                        <td><strong>{{ $val->name }}</strong></td>
                                                        <td id="{{ $val->type . '-' . $val->key }}">
                                                            @switch($val->type)
                                                                @case('image')
                                                                    <img src="{{ url($val->value) }}" alt="{{ $val->name }}" width="50%">
                                                                    <br>
                                                                    <hr>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $val->value }}" name="{{ $val->key }}">
                                                                @break

                                                                @case('multi_image')
                                                                    <?php
                                                                    $images = explode(';', $val->value);
                                                                    $i = 1;
                                                                    foreach ($images as $key => $value) {
                                                                        echo '<img src="' . $value . '" width="50%" >';
                                                                        echo '<input type="text" class="mt-2 form-control" value="' . $value . '" name="' . $val->key . '[' . $key . ']">';
                                                                        echo '<hr>';
                                                                        $i++;
                                                                    }
                                                                    ?>
                                                                    <script>
                                                                        var iterator = {{ count($images) }};
                                                                    </script>
                                                                <td style="display: flex; gap: 2px; flex-direction: column;">
                                                                    <button class="btn btn-primary"
                                                                        onclick="addNewInput(event, '{{ $val->key }}', '{{ $val->type . '-' . $val->key }}')">
                                                                        <i class="fa fa-arrow-up"></i> New
                                                                    </button>
                                                                    <button class="btn btn-danger"
                                                                        onclick="removeInput(event, '{{ $val->key }}')">
                                                                        <i class="fa fa-arrow-down"></i> Delete
                                                                    </button>
                                                                </td>
                                                            @break

                                                            @case('text')
                                                                <input type="text" value="{{ $val->value }}"
                                                                    class="form-control" name="{{ $val->key }}">
                                                            @break

                                                            @default
                                                        @endswitch
                                                        </td>

                                                        <script>
                                                            function addNewInput(event, key, parent) {
                                                                // Prevent the default action
                                                                event.preventDefault();

                                                                // Create a new input element
                                                                var newInput = document.createElement("input");
                                                                newInput.setAttribute("type", "text");
                                                                newInput.setAttribute("class", "mt-2 form-control");
                                                                newInput.setAttribute("name", `${key}[${iterator}]`);
                                                                newInput.setAttribute("placeholder", "url");
                                                                iterator += 1;

                                                                // Append the new input to the container
                                                                var container = document.getElementById(parent);
                                                                container.appendChild(newInput);

                                                                // Optionally, add a horizontal rule for separation
                                                                var hr = document.createElement("hr");
                                                                newInput.setAttribute("id", `${key}[${iterator}]`);

                                                                container.appendChild(hr);
                                                            }

                                                            function removeInput(event, key) {
                                                                event.preventDefault();
                                                                iterator--;
                                                                document.querySelector("[name='" + key + "[" + iterator + "]']").remove();
                                                            }
                                                        </script>

                                                    </tr>

                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                                        </tr>
                                                    @endforelse
                                                    <tr>
                                                        <td>

                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    @endsection
