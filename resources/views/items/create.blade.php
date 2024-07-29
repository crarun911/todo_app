@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Item</h1>
    <form action="{{ route('todo-items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="group_id">Group</label>
            <select name="group_id" id="group_id" class="form-control" required>
                @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="completed">Completed</label>
            <input type="checkbox" name="completed" id="isCompleted">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
