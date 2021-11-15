<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subtasks;

class SubtaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subtasks::create([
            'task_id' => 1,
            'name' => 'Membuat project laravel',
            'is_complete' => 0
        ]);
    }
}
