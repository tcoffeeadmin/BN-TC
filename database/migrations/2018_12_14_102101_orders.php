<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->char('user_id');
            $table->integer('item_qty');
            $table->char('booking_location');
            $table->char('delivery_location');
            $table->date('order_date');
            $table->char('order_tracking_status');
            $table->char('delivery_status');
            $table->char('payment_status');
            $table->char('order_status');

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
       Schema::dropIfExists('orders');
    }
}
