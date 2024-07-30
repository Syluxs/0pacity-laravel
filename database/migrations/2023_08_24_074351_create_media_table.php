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

        Schema::create('media', function (Blueprint $table) {
            $table->increments('id_media');
            $table->foreign('id_media')->references('pic_new')->on('new');
            $table->string('media_path');
        });

        /*Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
