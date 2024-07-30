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
       /* Schema::disableForeignKeyConstraints();*/

        Schema::create('upgrade_bot', function (Blueprint $table) {
            $table->increments('id_upgrade');
            $table->string('upgrade');
            $table->string('report');
            $table->integer('id_user');
            $table->integer('id_bot');
        });

        /*Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upgrade_bot');
    }
};
