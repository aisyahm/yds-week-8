<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colors;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['#000000', '#0000FF', '#FF8C00', '#FF1493'];

        foreach ($colors as $colors) {
            Colors::create([
                'name' => $colors
            ]);
        }
    }
}
