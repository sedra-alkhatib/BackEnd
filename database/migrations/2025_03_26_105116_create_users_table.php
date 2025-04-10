<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
       
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique()->nullable();
            $table->text('address')->nullable();
            $table->string('profile_picture')->nullable();
            $table->enum('user_type', ['customer', 'seller'])->default('customer');
            $table->timestamps();
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
       
       
        Schema::dropIfExists('users');
    }
};  