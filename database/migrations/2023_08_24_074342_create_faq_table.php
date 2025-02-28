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

        Schema::create('faq', function (Blueprint $table) {
            $table->increments('id_faq');
            $table->string('question');
            $table->string('answer')->nullable();
            $table->integer('id_user');
        });

        /*Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq');
    }
};
