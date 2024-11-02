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
        Schema::create('class_subjects', function (Blueprint $table){
            $table->id();
            $table->string('class')->nullable();
            $table->string('1period')->nullable();
            $table->string('2period')->nullable();
            $table->string('3period')->nullable();
            $table->string('4period')->nullable();
            $table->string('5period')->nullable();
            $table->string('6period')->nullable();
            $table->string('7period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_subjects');
    }
};
