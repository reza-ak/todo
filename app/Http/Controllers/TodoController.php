<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $todos = $user->todos()->paginate(3);
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
        $userId = Auth::id();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::create([
            'user_id' => $userId,
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

    // Complete task
    public function complete(string $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->update([
            'complete' => 1,
        ]);

        // sweet alert
        Alert::success('سپاس', 'وضعیت تسک مورد نظر به انجام شده تغییر یافت.');

        return redirect()->route('todos.index');
    }
}
