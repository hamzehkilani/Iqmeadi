<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('location');
            $table->string('duration')->nullable();;
            $table->double('price');
            $table->string('note')->nullable();
            $table->boolean('is_available')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
