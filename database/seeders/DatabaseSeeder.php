<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Task::firstOrCreate(
            ['title' => 'Review project requirements'],
            ['status' => 'pending', 'task_date' => now()->toDateString()]
        );

        Task::firstOrCreate(
            ['title' => 'Finish Laravel deployment'],
            ['status' => 'pending', 'task_date' => now()->addDay()->toDateString()]
        );

        Task::firstOrCreate(
            ['title' => 'Test the task list'],
            ['status' => 'completed', 'task_date' => now()->addDays(2)->toDateString()]
        );
    }
}