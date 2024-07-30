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
        /*Schema::disableForeignKeyConstraints();*/

        Schema::create('bot', function (Blueprint $table) {
            $table->increments('id_bot');
            $table->foreign('id_bot')->references('id_bot')->on('upgrade_bot');
            $table->string('bot_name');
            $table->string('how_to_use');
            $table->string('bot_creators');
            $table->string('update');
            $table->integer('bot_pic');
            $table->integer('price')->nullable();
            $table->integer('id_botType');
        });

        /*Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bot');
    }
};
