<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('image_posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('client_id')->references('id')->on('clients');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('image_posts');
    }
};
