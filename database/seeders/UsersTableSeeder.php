<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aisyah Mulyani',
            'email' => 'aisyahmulyani01@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
