<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('words', function (Blueprint $table) {
            $table->id();  //PK
            $table->unsignedBigInteger('themes_id'); //FK
            $table->string('word');
            $table->timestamps();

               // llave foranea con themes
            $table->foreign('themes_id')->references('id')->on('themes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('words');
    }
};
