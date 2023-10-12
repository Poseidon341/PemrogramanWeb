const taskInput = document.getElementById('task');
const addButton = document.getElementById('add-button');
const taskList = document.getElementById('task-list');

addButton.addEventListener('click', addTask);

function addTask() {
    const taskText = taskInput.value.trim();

    if (taskText !== '') {
        const li = document.createElement('li');
        li.innerHTML = `
            <span>${taskText}</span>
            <div class="action-buttons">
                <button class="check-button"><i class="fas fa-check"></i></button>
                <button class="delete-button"><i class="fas fa-trash"></i></button>
            </div>
        `;

        taskList.appendChild(li);

        const deleteButton = li.querySelector('.delete-button');
        deleteButton.addEventListener('click', deleteTask);

        const checkButton = li.querySelector('.check-button');
        checkButton.addEventListener('click', checkTask);

        taskInput.value = '';
    }
}

function deleteTask(event) {
    const li = event.target.parentElement.parentElement;
    taskList.removeChild(li);
}

function checkTask(event) {
    const li = event.target.parentElement.parentElement;
    li.classList.toggle('checked');
}
