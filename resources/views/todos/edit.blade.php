@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                @include('sections.errors')
                <div class="card">
                    <div class="card-header">
                        ویرایش تسک
                    </div>
                    <div class="card-body">
                        <form action="{{ route('todos.update', ['todo' => $todo->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="title">عنوان</label>
                                <input name="title" type="text" id="title"
                                    class="form-control mt-2 @error('title') border-danger @enderror"
                                    value="{{ $todo->title }}">
                                @error('title')
                                    <p class="invalid-feedback d-block pt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">توضیحات</label>
                                <textarea name="description" id="description" class="form-control mt-2 @error('description') border-danger @enderror">{{ $todo->description }}</textarea>
                                @error('description')
                                    <p class="invalid-feedback d-block pt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <button class="btn btn-dark" type="submit">ویرایش</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
