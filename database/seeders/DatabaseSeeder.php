<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Mohamed',
            'email' => 'm.afssas9@gmail.com',
            'password' => bcrypt('asdf1234'),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
