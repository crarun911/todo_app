@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Todo Group</h1>
    <form action="{{ route('todo-groups.update', $group) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Group Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $group->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
