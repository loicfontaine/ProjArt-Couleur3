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
        Schema::create('access_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("group_id")->unsigned();
            $table->integer("access_id")->unsigned();
            $table->foreign("group_id")->references("id")->on("group")
                ->onDelete("restrict")
                ->onUpdate("restrict");
            $table->foreign("access_id")->references("id")->on("access")
                ->onDelete("restrict")
                ->onUpdate("restrict");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_group');
    }
};
