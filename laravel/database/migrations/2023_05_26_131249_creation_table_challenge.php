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
        Schema::create('challenge', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->timestamp("start_time");
            $table->timestamp("end_time");
            $table->boolean("is_contest")->default("false");
            $table->integer("ColorCoins_earned_by_participation");
            $table->integer("reward_id")->unsigned();
            $table->integer("user_id")->unsigned()->nullable();
            $table->foreign("reward_id")
                ->on("reward")
                ->onDelete("restrict")
                ->onUpdate("restrict");

            $table->foreign("user_id")
                ->on("user")
                ->onDelete("restrict")
                ->onUpdate("restrict");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenge');
    }
};
