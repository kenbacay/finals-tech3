<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSystemSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'kenbacay',
            'full_name' => 'Ken Ehlvert Bacay',
            'email' => 'kenbacay@gmail.com',
        ]);

        Task::insert([
            ['title' => 'Review today\'s priorities', 'status' => 'pending', 'task_date' => today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Attend web technologies class', 'status' => 'in_progress', 'task_date' => today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Submit the Laravel activity', 'status' => 'pending', 'task_date' => today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Plan tomorrow\'s study schedule', 'status' => 'pending', 'task_date' => today()->addDay(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Prepare project notes', 'status' => 'completed', 'task_date' => today()->addDay(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Review database relationships', 'status' => 'pending', 'task_date' => today()->addDays(2), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Organize development files', 'status' => 'pending', 'task_date' => today()->subDay(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Read Laravel documentation', 'status' => 'completed', 'task_date' => today()->subDays(2), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
