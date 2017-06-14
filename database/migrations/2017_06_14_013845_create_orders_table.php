<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('device_type');
            $table->string('orderPcs');
            $table->integer('cost');
            $table->integer('deposit');
            $table->string('model');
            $table->text('defective');
            $table->integer('repaircost');
            $table->text('note');
            $table->string('status');
            $table->text('statuscode');
            $table->string('condition');
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
