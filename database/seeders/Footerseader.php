<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class Footerseader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\footer::factory()->create([
        'location'=>'اربد- دوار اليوسفي',
        'email'=>"iqmediajo@gmail.com",
        'phone'=>'0782820082',
        'facebook_url'=>"https://www.facebook.com/iqmediajo/",
        'instagram_url'=>"https://instagram.com/iqmediajo?igshid=NTc4MTIwNjQ2YQ==",
        'youtube_url'=>"https://www.youtube.com/@IQMedia-vl5bo",
      ]);
    }
}
