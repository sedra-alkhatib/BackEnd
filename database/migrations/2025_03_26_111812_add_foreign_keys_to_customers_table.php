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
        Schema::table('customers', function (Blueprint $table) {
            $table->foreignId('result_id')->constrained('results')->onDelete('cascade');
            $table->foreignId('image_analysis_id')->constrained('image_analysis')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign(['result_id']);
            $table->dropForeign(['image_analysis_id']);
            $table->dropColumn(['result_id', 'image_analysis_id']);
        });
    }
};