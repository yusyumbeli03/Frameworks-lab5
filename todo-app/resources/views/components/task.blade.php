@props(['task'])

<div class="task">
    <h2>{{ $task['title'] }}</h2>
    <p><strong>Description:</strong> {{ $task['description'] ?? 'Описание не указано.' }}</p>
    <p><strong>Creation date:</strong> {{ $task['created_at'] ?? 'Не указана' }}</p>
    <p><strong>Update date:</strong> {{ $task['updated_at'] ?? 'Не указана' }}</p>
    <p><strong>Status:</strong> {{ $task['status'] ? 'Completed' : 'Not completed' }}</p>
    <p><strong>Priority:</strong> {{ $task['priority'] }}</p>
    <p><strong>Executor:</strong> {{ $task['assigned_to'] ?? 'Не назначен' }}</p>

    </div>
</div>