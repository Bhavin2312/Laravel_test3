@extends('layouts.app')

@section('content')
    <div class="container-fluid d-flex align-items-center justify-content-center bg-light"
        style="min-height: 100vh; overflow: hidden;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h2 class="mb-0">Welcome to Home Page</h2>
                    </div>
                    <div class="card-body text-center">
                        <p class="mb-4">Please login or register to continue.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
