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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Ability::class)->nullable();
            $table->foreignIdFor(\App\Models\AgentLore::class)->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('role');
            $table->string('role_description');
            $table->string('icon');
            $table->string('role_icon');
            $table->string('portrait');
            $table->string('background');
            $table->string('color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
