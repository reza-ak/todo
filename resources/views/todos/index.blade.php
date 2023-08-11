@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                <h4 class="py-2">تسک ها</h4>
                <div class="card">
                    <div class="card-header">
                        تسک ها
                    </div>
                    <div class="card-body">
                        <ul class="list-group p-3">
                            @foreach ($todos as $todo)
                                <li class="list-group-item d-flex justify-content-between">
                                    {{ $todo->title }}
                                    <a class="btn btn-sm btn-dark"
                                        href="{{ route('todos.show', ['todo' => $todo->id]) }}">نمایش</a>
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