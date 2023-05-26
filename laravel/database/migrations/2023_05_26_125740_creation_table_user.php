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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname', 50);
            $table->string('firstname', 50);
            $table->string('nickname', 50);
            $table->string('email', 100);
            $table->string('phone_number', 20);
            $table->integer('color_coins');
            $table->string('password', 150);
            $table->string('address', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
