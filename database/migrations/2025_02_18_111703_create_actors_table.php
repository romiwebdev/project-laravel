<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cast_id')->constrained('casts')->onDelete('cascade');
            $table->foreignId('film_id')->constrained('films')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('actors');
    }
};
