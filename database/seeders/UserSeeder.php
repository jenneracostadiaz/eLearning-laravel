<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jenner Acosta Diaz',
            'email' => 'dev@jenner.pe',
            'password' => bcrypt('12345678')
        ]);

        User::factory(99)->create();
    }
}
