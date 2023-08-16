@extends('layouts.auth')
@php
    $title = 'ثبت نام';
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">ثبت نام</div>

                    <div class="card-body">
                        <form class="row" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3 col-md-6 m-0">
                                <label for="name" class="col-md-4 col-form-label text-md-end">نام:</label>

                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6 m-0">
                                <label for="email" class="col-md-4 col-form-label text-md-end">ایمیل:</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6 m-0">
                                <label for="username" class="col-md-4 col-form-label text-md-end">نام کاربری:</label>

                                <div class="col-md-12">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" autocomplete="username">

                                    @error('username')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6 m-0">
                                <label for="password" class="col-md-4 col-form-label text-md-end">رمز عبور:</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6 m-0">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">تکرار رمز
                                    عبور:</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0 mt-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        ثبت نام
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="d-inline text-muted">
                            اگر حساب کاربری دارید وارد شوید :
                        </p>
                        <a class="text-decoration-none pe-2" href="{{ route('login') }}">ورود</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

