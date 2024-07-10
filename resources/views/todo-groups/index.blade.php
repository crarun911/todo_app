@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todo Groups</h1>
    <a href="{{ route('todo-groups.create') }}" class="btn btn-primary">Create New Group</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
            <tr>
                <td>{{ $group->name }}</td>
                <td>
                    <a href="{{ route('todo-groups.edit', $group) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('todo-groups.show', $group) }}" class="btn btn-info">View</a>
                    <form action="{{ route('todo-groups.destroy', $group) }}" method="POST" style="display:inline-block;">
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
