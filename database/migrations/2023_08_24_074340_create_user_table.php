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

        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->foreign('id_user')->references('id_user')->on('subscription');
            $table->string('first_name');
            $table->string('last_name');
            $table->dateTime('date_of_birth');
            $table->string('mail');
            $table->string('phone');
            $table->timestamp('local_time');
            $table->string('status');
            $table->string('user_pic')->nullable();
            $table->string('password');
            $table->string('gender');
            $table->bigInteger('id_role');
        });

       /* Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
