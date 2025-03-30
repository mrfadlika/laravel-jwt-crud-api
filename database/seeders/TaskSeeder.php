<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'title' => 'Setup Project Structure',
                'description' => 'Initialize the project repository and setup basic structure',
                'status' => 'done',
                'priority' => 'high',
                'due_date' => now()->subDays(5),
                'assigned_to' => 'John Developer'
            ],
            [
                'title' => 'Design Database Schema',
                'description' => 'Create ERD and database migration files',
                'status' => 'done',
                'priority' => 'high',
                'due_date' => now()->subDays(3),
                'assigned_to' => 'Maria DB'
            ],
            [
                'title' => 'Implement Authentication',
                'description' => 'Setup user authentication and authorization',
                'status' => 'ongoing',
                'priority' => 'high',
                'due_date' => now()->addDays(2),
                'assigned_to' => 'Security Sam'
            ],
            [
                'title' => 'Create Kanban Board UI',
                'description' => 'Design and implement the Kanban board interface',
                'status' => 'doing',
                'priority' => 'normal',
                'due_date' => now()->addDays(5),
                'assigned_to' => 'UI Ursula'
            ],
            [
                'title' => 'Implement Drag and Drop',
                'description' => 'Add drag and drop functionality to move tasks between columns',
                'status' => 'backlog',
                'priority' => 'normal',
                'due_date' => now()->addDays(7),
                'assigned_to' => 'Frontend Fred'
            ],
            [
                'title' => 'Add Task Filtering',
                'description' => 'Implement filtering by assignee, priority, and due date',
                'status' => 'backlog',
                'priority' => 'low',
                'due_date' => now()->addDays(10),
                'assigned_to' => null
            ],
            [
                'title' => 'Write Unit Tests',
                'description' => 'Create comprehensive test suite for backend API',
                'status' => 'ontest',
                'priority' => 'high',
                'due_date' => now()->addDay(),
                'assigned_to' => 'Tester Tim'
            ]
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}