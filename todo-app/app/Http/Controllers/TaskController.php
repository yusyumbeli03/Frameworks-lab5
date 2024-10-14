<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Метод для отображения списка задач
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Task 1'],
            ['id' => 2, 'title' => 'Task 2'],
            ['id' => 3, 'title' => 'Task 3'],
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }

    // Метод для отображения конкретной задачи
    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Task ' . $id,
            'description' => 'Description of ' . $id . ' task',
            'created_at' => now()->subDays($id)->toDateString(),
            'updated_at' => now()->toDateString(),
            'status' => $id % 2 == 0,
            'priority' => ['low', 'medium', 'high'][array_rand(['low', 'medium', 'high'])],
            'assigned_to' => 'User 1'
        ];

        return view('tasks.show', ['task' => $task]);
    }
}

