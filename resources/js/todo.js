let todos = JSON.parse(localStorage.getItem('todos')) || [];

function renderTodos() {
    const list = document.getElementById('todoList');
    list.innerHTML = '';
    todos.forEach((todo, index) => {
        const li = document.createElement('li');
        li.innerHTML = `
            <span onclick="toggleDone(${index})" class="${todo.done ? 'done' : ''}">
                ${todo.text}
            </span>
            <div>
                <button onclick="deleteTodo(${index})">❌</button>
            </div>
        `;
        list.appendChild(li);
    });
}

function addTodo() {
    const input = document.getElementById('todoInput');
    const text = input.value.trim();
    if (text) {
        todos.push({ text, done: false });
        input.value = '';
        saveTodos();
    }
}

function toggleDone(index) {
    todos[index].done = !todos[index].done;
    saveTodos();
}

function deleteTodo(index) {
    todos.splice(index, 1);
    saveTodos();
}

function saveTodos() {
    localStorage.setItem('todos', JSON.stringify(todos));
    renderTodos();
}

document.getElementById('addBtn').addEventListener('click', addTodo);

document.getElementById('todoInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        addTodo();
    }
});

renderTodos();
