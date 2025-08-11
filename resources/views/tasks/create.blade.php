@extends('layout')

@section('content')
<h1>Add Task</h1>
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" required>
    <textarea name="description" placeholder="Description">{{ old('description') }}</textarea>
    <button type="submit">Save</button>
</form>
@endsection
