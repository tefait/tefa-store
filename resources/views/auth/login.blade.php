@extends('layouts.auth')

@section('title')
    <title>Login</title>
    @vite(['resources/css   /app.css', 'resources/js/app.js'])

@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="p-4 card">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3 input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>

                                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    type="text"
                                    name="email"
                                    placeholder="Email Address"
                                    value="{{ old('email') }}"
                                    autofocus
                                    required>
                            </div>
                            <div class="mb-4 input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required>
                            </div>
                            <div class="row">
                                @if (session('error'))
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                </div>
                                @endif

                                <div class="col-6">
                                    <button class="px-4 btn btn-primary">Login</button>
                                </div>
                                <div class="text-right col-6">
                                    <button class="px-0 btn btn-link" type="button">Forgot password?</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="py-5 text-white card bg-primary d-md-down-none" style="width:44%">
                    <div class="text-center card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
