@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h4 class="mb-0">تسک ها</h4>
                    <a href="{{ route('todos.create') }}" class="btn btn-sm btn-outline-dark">ایجاد تسک جدید</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        تسک ها
                    </div>
                    <div class="card-body">
                        <ul class="list-group p-3">
                            @foreach ($todos as $todo)
                                <li class="list-group-item d-flex justify-content-between">
                                    {{ $todo->title }}
                                    <div>
                                        <a class="btn btn-sm btn-dark"
                                            href="{{ route('todos.show', ['todo' => $todo->id]) }}">
                                            نمایش
                                        </a>
                                        @if ($todo->complete == 0)
                                            <a class="btn btn-sm btn-outline-success"
                                                href="{{ route('todos.complete', ['todo' => $todo->id]) }}">
                                                انجام شد
                                            </a>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-4">
                    {{ $todos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
