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
            $table->string('ability1');
            $table->string('ability1_desc');
            $table->string('ability1_icon');
            $table->string('ability2');
            $table->string('ability2_desc');
            $table->string('ability2_icon');
            $table->string('ability3');
            $table->string('ability3_desc');
            $table->string('ability3_icon');
            $table->string('ultimate');
            $table->string('ultimate_desc');
            $table->string('ultimate_icon');
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
