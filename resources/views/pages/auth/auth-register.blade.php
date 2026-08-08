@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-12">
                        <label for="name">Name</label>
                        <input id="name"
                            type="text"
                            class="form-control @error('name')
                                is-invalid
                            @enderror"
                            name="name" autofocus>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                  <div class="row">
                  <div class="form-group col-12">
                        <label for="email">Email</label>
                        <input id="email"
                            type="email"
                            class="form-control @error('email')
                                is-invalid
                            @enderror"
                            name="email"
                            autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-12">
                        <label for="password">Password</label>
                        <input id="password"
                            type="password"
                            class="form-control @error('password')
                                is-invalid
                            @enderror"
                            name="password"
                            autofocus>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-12">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation"
                            type="password"
                            class="form-control @error('password_confirmation')
                                is-invalid
                            @enderror"
                            name="password_confirmation"
                            autofocus>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
