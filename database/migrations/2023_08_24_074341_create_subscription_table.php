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

        Schema::create('subscription', function (Blueprint $table) {
            $table->integer('id_user');
            $table->integer('id_bot');
            $table->dateTime('subscribed_at')->comment('every month');
            $table->boolean('is_active');
            $table->integer('price');
            $table->string('type_of _subscribtion');
            $table->integer('id_subscribtion')->primary();
            $table->bigInteger('end_at')->comment('subscribed at + 1 month');
        });

        /*Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
