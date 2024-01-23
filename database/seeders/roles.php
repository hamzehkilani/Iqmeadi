<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class roles extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        \App\Models\Role::factory()->create([
          'name'=>'Admin',
        ]);
        \App\Models\Role::factory()->create([
            'name'=>'Customer',
          ]);
    }
}
