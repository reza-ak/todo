@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                @include('sections.errors')
                <div class="card">
                    <div class="card-header">
                        ایجاد تسک جدید
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('todos.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">عنوان</label>
                                <input name="title" type="text" id="title"
                                    class="form-control mt-2 @error('title') border-danger @enderror"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <p class="invalid-feedback d-block pt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">توضیحات</label>
                                <textarea name="description" id="description" class="form-control mt-2 @error('description') border-danger @enderror">
                                    {{ old('description') }}
                                </textarea>
                                @error('description')
                                    <p class="invalid-feedback d-block pt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <button class="btn btn-dark" type="submit">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
