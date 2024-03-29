<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('about_companies', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('about_companies');
    }
};
