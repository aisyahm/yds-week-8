<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tasks;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tasks::create([
            'user_id' => 1,
            'list_id'=> 1,
            'name' => 'Tugas Pekan 8',
            'reminder_datetime' => '2021-11-15 21:00:00',
            'due_date'=> '2021-11-15',
            'is_complete' => 0,
            'is_my_day' => 0
        ]);

        Tasks::create([
            'user_id' => 1,
            'list_id'=> 1,
            'name' => 'Belajar materi pekan 9',
            'reminder_datetime' => '2021-11-19 21:00:00',
            'due_date'=> '2021-11-19',
            'is_complete' => 0,
            'is_my_day' => 0
        ]);
    }
}
