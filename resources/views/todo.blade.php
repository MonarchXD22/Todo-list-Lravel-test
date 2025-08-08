<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List (Local Storage)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">
</head>
<body>
    <h1>My To-Do List</h1>
    <div class="todo-container">
        <input type="text" id="todoInput" placeholder="Add new task...">
        <button id="addBtn">Add</button>
        <ul id="todoList"></ul>
    </div>

    <script src="{{ asset('js/todo.js') }}"></script>
</body>
</html>
