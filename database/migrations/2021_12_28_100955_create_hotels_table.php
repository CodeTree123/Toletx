<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('post_type');
            $table->string('post_title');
            $table->date('date');
            $table->bigInteger('phone');
            $table->bigInteger('price');
            $table->string('per_price');
            $table->bigInteger('s_charge');
            $table->string('s_per_price');
            $table->string('description')->nullable();
            $table->string('hotel_name');
            $table->string('location');
            $table->string('bathroom')->nullable();
            $table->string('wifi')->nullable();
            $table->string('lift')->nullable();
            $table->string('room_type');
            $table->string('hot_water')->nullable();
            $table->string('generator')->nullable();
            $table->string('parking')->nullable();
            $table->string('ac')->nullable();
            $table->string('laundry')->nullable();
            $table->string('gym')->nullable();
            $table->string('sports')->nullable();
            $table->string('dining')->nullable();
            $table->string('fire_exit')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->integer('active')->default(1);
            $table->bigInteger('table_api')->default(5);
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
        Schema::dropIfExists('hotels');
    }
}
