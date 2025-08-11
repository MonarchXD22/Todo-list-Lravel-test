@extends('layout')

@section('content')
<h1>Todo List</h1>
<a href="{{ route('tasks.create') }}">Add Task</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong> - {{ $task->description }}
            @if($task->is_completed)
                ✅
            @endif
            <a href="{{ route('tasks.edit', $task) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
