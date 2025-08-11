@extends('layout')

@section('content')
<h1>Edit Task</h1>
<form method="POST" action="{{ route('tasks.update', $task) }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $task->title }}" required>
    <textarea name="description">{{ $task->description }}</textarea>
    <label>
        Completed:
        <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
    </label>
    <button type="submit">Update</button>
</form>
@endsection
