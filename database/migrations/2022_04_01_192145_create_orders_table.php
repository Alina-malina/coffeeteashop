<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('status')->default(0);
            $table->string('phone')->default(1);
            $table->string('name')->default(1);
            $table->string('city')->default(1);
            $table->string('street')->default(1);
            $table->integer('entrance')->default(1);
            $table->integer('floor')->nullable();
            $table->integer('flat')->default(1);
            $table->integer('intercom')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
