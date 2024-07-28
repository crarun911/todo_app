@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todo Group: {{ $group->name }}</h1>
    <a href="{{ route('todo-groups.edit', $group) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('todo-groups.destroy', $group) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <h2>Todo Items</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Completed</th>
            </tr>
        </thead>
        <tbody>
            @foreach($group->todoItems as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->completed ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
