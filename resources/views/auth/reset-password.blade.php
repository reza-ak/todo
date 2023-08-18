@extends('layouts.auth')
@php
    $title = 'بازیابی رمز عبور';
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">بازیابی رمز عبور</div>

                    <div class="card-body">
                        @include('sections.errors')

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ request()->route('token') }}">

                            <div class="row m-0 mb-3 col-md-12">
                                <label for="username" class="col-md-4 col-form-label text-md-end">ایمیل</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback pt-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-0 mb-3 col-md-12">
                                <label for="password" class="col-md-4 col-form-label text-md-end">رمز عبور جدید</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback pt-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-0 mb-3 col-md-12">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">تکرار رمز
                                    عبور</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row m-0 mb-3 col-md-12">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        تغیر رمز عبور
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
