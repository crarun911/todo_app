@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todo Item: {{ $item->title }}</h1>
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <p><strong>Completed:</strong> {{ $item->completed ? 'Yes' : 'No' }}</p>
    <p><strong>Group:</strong> {{ $item->group->name }}</p>
    <a href="{{ route('todo-items.edit', $item) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('todo-items.destroy', $item) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
