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
        $colors = ['Merah', 'Biru', 'Kuning', 'Hijau'];

        foreach ($colors as $colors) {
            Colors::create([
                'name' => $colors
            ]);
        }
    }
}
