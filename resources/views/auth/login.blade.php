@extends('layouts.auth')
@php
    $title = 'ورود';
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">ورود</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                بازیابی رمز عبور با موفقیت انجام شد.
                            </div>
                        @endif
                        <form class="row" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row m-0 mb-3 col-md-12">
                                <label for="username" class="col-md-4 col-form-label text-md-end">نام کاربری</label>

                                <div class="col-md-12">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-0 mb-2 col-md-12">
                                <label for="password" class="col-md-4 col-form-label text-md-end">پسورد</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-md-12 m-0">
                                <a class="text-decoration-none col-12" href="{{ route('password.request') }}">
                                    رمزعبورم را فراموش کردم.
                                </a>

                                <button type="submit" class="btn btn-outline-success col-2 m-2 mt-4">
                                    ورود
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="d-inline text-muted">
                            اگر حساب کاربری ندارید ثبت نام کنید :
                        </p>
                        <a class="text-decoration-none pe-2" href="{{ route('register') }}">ثبت نام</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
