@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Todo Group</h1>
    <form action="{{ route('todo-groups.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Group Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
