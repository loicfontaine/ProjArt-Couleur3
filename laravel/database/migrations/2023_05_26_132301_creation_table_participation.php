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
        Schema::create('participation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("challenge_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->foreign("challenge_id")
                ->on("challenge")
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
        Schema::dropIfExists('participation');
    }
};
