<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('post_type');
            $table->string('building_name');
            $table->bigInteger('phone');
            $table->date('date');
            $table->bigInteger('price');
            $table->string('per_price');
            $table->bigInteger('s_charge');
            $table->string('s_per_charge');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('building_size');
            $table->bigInteger('floor');
            $table->string('floor_size');
            $table->string('t_build');
            $table->string('road_width');
            $table->string('gas')->nullable();
            $table->string('water')->nullable();
            $table->string('electricity')->nullable();
            $table->string('lift')->nullable();
            $table->string('generator')->nullable();
            $table->string('parking')->nullable();
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
            $table->bigInteger('table_api')->default(3);
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
        Schema::dropIfExists('buildings');
    }
}
