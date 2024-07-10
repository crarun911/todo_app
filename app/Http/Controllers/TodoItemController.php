<?php

namespace App\Http\Controllers;
use App\Models\TodoItem;
use App\Models\TodoGroup;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    public function index()
    {
        $items = TodoItem::all();
        return view('todo-items.index', compact('items'));
    }

    public function create()
    {
        $groups = TodoGroup::all();
        return view('todo-items.create', compact('groups'));
    }

    public function store(Request $request)
    {
        TodoItem::create($request->all());
        return redirect()->route('todo-items.index');
    }

    public function show(TodoItem $todoItem)
    {
        return view('todo-items.show', compact('todoItem'));
    }

    public function edit(TodoItem $todoItem)
    {
        $groups = TodoGroup::all();
         return view('todo-items.edit', [
            'item' => $todoItem,
            'groups' => $groups
        ]);
    }

    public function update(Request $request, TodoItem $todoItem)
    {
        $todoItem->update($request->all());
        return redirect()->route('todo-items.index');
    }

    public function destroy(TodoItem $todoItem)
    {
        $todoItem->delete();
        return redirect()->route('todo-items.index');
    }
}
