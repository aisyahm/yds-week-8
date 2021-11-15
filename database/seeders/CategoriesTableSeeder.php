<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Blue category', 'Orange category', 'Pink category'];

        foreach ($categories as $categories) {
            Categories::create([
                'name' => $categories
            ]);
        }
    }
}
