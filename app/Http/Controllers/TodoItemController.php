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
        return view('items.index', compact('items'));
    }

    public function create()
    {
        $groups = TodoGroup::all();
        return view('items.create', compact('groups'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'group_id' => 'required|exists:todo_groups,id',
        ]);

        TodoItem::create([
            'title' => $request->title,
            'description' => $request->description,
            'group_id' => $request->group_id,
            'isCompleted' => $request->has('isCompleted') ? true : false,
        ]);

        return redirect()->route('todo-items.index')->with('success', 'Todo Item created successfully.');

    }

    public function show(TodoItem $todoItem)
    {
        return view('items.show', compact('todoItem'));
    }

    public function edit(TodoItem $todoItem)
    {
        $groups = TodoGroup::all();
        return view('items.edit', [
            'item' => $todoItem,
            'groups' => $groups
        ]);
    }

    public function update(Request $request, TodoItem $todoItem)
    
 {

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'group_id' => 'required|exists:todo_groups,id',
    ]);

    $todoItem->update([
        'title' => $request->title,
        'description' => $request->description,
        'group_id' => $request->group_id,
        'isCompleted' => $request->has('isCompleted') ? true : false,
    ]);
    

    return redirect()->route('todo-items.index')->with('success', 'Todo Item updated successfully.');
}


    public function destroy(TodoItem $todoItem)
    {
        $todoItem->delete();
        return redirect()->route('todo-items.index')->with('success', 'Todo Item deleted successfully.');
    }
}
