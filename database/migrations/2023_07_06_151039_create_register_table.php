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
        Schema::create('register', function (Blueprint $table) {
            $table->id('user_id'); 
            $table->string('name',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('password')->nullable();
            $table->string('city',50)->default("Karachi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
