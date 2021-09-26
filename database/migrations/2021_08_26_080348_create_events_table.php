<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // $table->string('event_id')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('host');
            $table->string('description');
            $table->string('venue')->default('Physical');
            $table->string('location');
            $table->integer('capacity');
            $table->integer('ticket_sales')->default(0);
            $table->string('special_guests');
            $table->date('date');
            $table->date('sales_start_date');
            $table->date('sales_end_date');
            $table->string('sales_start_time');
            $table->string('sales_end_time');
            $table->string('theme');
            $table->string('event_giveaways');
            $table->string('ticket_type')->default('paid');
            $table->string('price');
            $table->string('image');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
