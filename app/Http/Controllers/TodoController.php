<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::latest()->paginate(3);
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // sweet alert
        Alert::success('سپاس', 'تسک جدید با موفقیت ایجاد شد.');

        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $todo = Todo::findOrFail($id);

        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // sweet alert
        Alert::success('سپاس', 'تسک مورد نظر با موفقیت ویرایش شد.');

        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();

        // sweet alert
        Alert::success('سپاس', 'تسک مورد نظر با موفقیت حذف شد.');
        return redirect()->route('todos.index');
    }
}
