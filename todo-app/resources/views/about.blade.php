@extends('layouts.app')

@section('title', 'О нас')

@section('content')
<h1 class="text-3xl font-bold mb-4">What We Do</h1>
<p class="mb-6">The To-Do App is an effective tool for task management that helps teams organize their workflow, track progress, and achieve goals. The application allows users to create, edit, and delete tasks, as well as share them with colleagues for better coordination within the team.</p>

<h2 class="text-2xl font-semibold mb-4">Key Features and Capabilities</h2>
<ul class="about-list list-none space-y-4">
    <li >
        <span><strong>Task Creation and Management:</strong> Users can easily create tasks by specifying titles, descriptions, deadlines, and priorities.</span>
    </li>

    <li>
        <span><strong>Task Editing:</strong> Tasks can be updated at any time — changing information, adjusting deadlines, priorities, or assigning new executors.</span>
    </li>

    <li >
        <span><strong>Task Assignment to Team Members:</strong> Each task can be distributed among team members.</span>
    </li>

    <li>
        <span><strong>Collaboration:</strong> The ability to share tasks with colleagues makes collaboration on projects more transparent and productive, as each participant sees their role in the overall process.</span>
    </li>

    <li>
        <span><strong>Task Categorization and Filtering:</strong> Tasks can be divided into categories (e.g., by projects) and filtered by status (pending, in progress, completed) and priority. This allows for quick finding of needed tasks and focusing on key areas.</span>
    </li>
</ul>

@endsection