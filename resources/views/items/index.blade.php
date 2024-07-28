@extends('layouts.app')

@section('title', 'Todo Items')

@section('content')
<div class="container">
    <h1 class="my-4">Todo Items</h1>
    <a href="{{ route('todo-groups.create') }}" class="btn btn-primary mb-3">Add New Group</a>
    <br>
    <a href="{{ route('todo-items.create') }}" class="btn btn-primary mb-3">Add New Item</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Completed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->completed ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('todo-items.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('todo-items.destroy', $item) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
