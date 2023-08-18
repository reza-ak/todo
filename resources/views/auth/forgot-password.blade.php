@extends('layouts.auth')
@php
    $title = 'فراموشی رمز عبور';
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">فراموشی رمز عبور</div>

                    <div class="card-body text-end">
                        @include('sections.errors')

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                لینک بازیابی رمز عبور به ایمیل شما فرستاده شد.
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

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

                            <div class="row col-md-12 m-0">
                                <button type="submit" class="btn btn-outline-success col-4 m-2 mt-4">
                                    ارسال لینک
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
