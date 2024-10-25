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
        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name_1');
            $table->string('description_1');
            $table->string('icon_1');
            $table->string('video_1')->nullable();
            $table->string('name_2');
            $table->string('description_2');
            $table->string('icon_2');
            $table->string('video_2')->nullable();
            $table->string('name_3');
            $table->string('description_3');
            $table->string('icon_3');
            $table->string('video_3')->nullable();
            $table->string('ultimate');
            $table->string('description_u');
            $table->string('icon_u');
            $table->string('video_u')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abilities');
    }
};
