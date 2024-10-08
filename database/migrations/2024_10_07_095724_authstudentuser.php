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
        Schema::create('authstudentsuser', function (Blueprint $table){
            $table->id();
            $table->string('studentUserName');
            $table->string('studentEmail');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('studentPassword');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authstudentsuser');
    }
};
