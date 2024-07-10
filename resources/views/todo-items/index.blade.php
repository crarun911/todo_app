@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todo Items</h1>
    <a href="{{ route('todo-items.create') }}" class="btn btn-primary">Create New Todo Item</a>
    <table class="table">
        <thead>
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
                    <a href="{{ route('todo-items.edit', $item) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('todo-items.destroy', $item) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
