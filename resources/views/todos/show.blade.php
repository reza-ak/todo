@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                <h4 class="py-2 text-center">{{ $todo->title }}</h4>
                <div class="card">
                    <div class="card-header">
                        توضیحات
                    </div>
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
