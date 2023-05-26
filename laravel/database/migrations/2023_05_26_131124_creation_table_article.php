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
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->string("image", "50");
            $table->integer("price");
            $table->integer("nb_stock");
            $table->boolean("is_displayed")->default("false");
            $table->integer("user_id")->unsigned();
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
        Schema::dropIfExists('article');
    }
};
