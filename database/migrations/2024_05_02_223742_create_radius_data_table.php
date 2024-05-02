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
        Schema::create('radius', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->index();
            $table->string('description');
            $table->string('name')->unique();
            $table->string('client')->unique();
            $table->string('ip_address', 45)->nullable();
            $table->string('technical');
            $table->timestamp('create_at')->nullable();
            $table->string('password_radius');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radius');
    }
};
