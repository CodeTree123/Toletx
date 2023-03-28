<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->date('date');
            $table->bigInteger('phone');
            $table->bigInteger('s_charge');
            $table->string('s_per_price');
            $table->string('description')->nullable();
            $table->string('hostel_name');
            $table->string('address');
            $table->string('room_size');
            $table->string('room_type');
            $table->bigInteger('price');
            $table->string('per_price');
            $table->string('wifi')->nullable();
            $table->string('attached_toilet')->nullable();
            $table->string('generator')->nullable();
            $table->string('lift')->nullable();
            $table->string('furnished')->nullable();
            $table->string('hot_water')->nullable();
            $table->string('laundry')->nullable();
            $table->string('ac')->nullable();
            $table->string('pool')->nullable();
            $table->string('parking')->nullable();
            $table->string('dining')->nullable();
            $table->string('gym')->nullable();
            $table->string('spa')->nullable();
            $table->string('sports')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->integer('active')->default(1);
            $table->bigInteger('table_api')->default(6);
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
        Schema::dropIfExists('hostels');
    }
}
