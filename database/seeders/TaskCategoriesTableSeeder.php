<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaskCategories;

class TaskCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskCategories::create([
            'task_id' => 1,
            'category_id' => 1
        ]);
        
        TaskCategories::create([
            'task_id' => 2,
            'category_id' => 2
        ]);
    }
}
