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
        Schema::create('definitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('words_id'); //FK
            $table->string('definition');
            $table->boolean('is_correct')->default(false);  
            $table->timestamps();

            $table->foreign('words_id')->references('id')->on('words');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('definitions');

    }
};
