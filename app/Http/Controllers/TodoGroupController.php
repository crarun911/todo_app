<?php

namespace App\Http\Controllers;
use App\Models\TodoGroup;
use Illuminate\Http\Request;

class TodoGroupController extends Controller
{
    public function index()
    {
        $groups = TodoGroup::all();
        return view('todo-groups.index', compact('groups'));
    }

    public function create()
    {
        return view('todo-groups.create');
    }

    public function store(Request $request)
    {
        TodoGroup::create($request->all());
        return redirect()->route('todo-groups.index');
    }

    public function show(TodoGroup $todoGroup)
    {
        return view('todo-groups.show', compact('todoGroup'));
    }

    public function edit(TodoGroup $todoGroup)
    {
        return view('todo-groups.edit', compact('todoGroup'));
    }

    public function update(Request $request, TodoGroup $todoGroup)
    {
        $todoGroup->update($request->all());
        return redirect()->route('todo-groups.index');
    }

    public function destroy(TodoGroup $todoGroup)
    {
        $todoGroup->delete();
        return redirect()->route('todo-groups.index');
    }
}
