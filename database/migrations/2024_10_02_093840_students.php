<?php

use App\Models\Classes;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classes_id')->constrained()->onDelete('cascade');
            $table->string('stdName');
            $table->string('stdAddress');
            $table->string('stdPhone');
            $table->string('Class');
            $table->string('Section');
            $table->string('stdEmail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('stdPassword');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');  
    }
};
