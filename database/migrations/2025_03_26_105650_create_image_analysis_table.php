<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('image_analysis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('image_url');
            $table->string('skin_tone_result');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('image_analysis');
    }
};