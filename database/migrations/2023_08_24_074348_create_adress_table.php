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

        Schema::create('adress', function (Blueprint $table) {
            $table->increments('id_adress');
            $table->string('street');
            $table->integer('number');
            $table->bigInteger('country_code');
            $table->string('city');
            $table->string('country');
            $table->integer('id_user');
        });

       /* Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adress');
    }
};
