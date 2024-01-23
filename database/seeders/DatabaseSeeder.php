<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'yousef',
            'last_name' => 'ayyoub',
            'email' => 'yousefayyoub6@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // Default password
            'remember_token' => Str::random(10),
            'role_id'=>1,
        ]);
    }
}
