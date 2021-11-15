<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lists;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lists::create([
            'color_id' => 4,
            'user_id' => 1,
            'name' => 'Yaumi',
            'password' => bcrypt('12345'),
        ]);
    }
}
