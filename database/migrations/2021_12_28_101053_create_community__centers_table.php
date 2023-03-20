<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community__centers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->string('c_name');
            $table->date('date');
            $table->bigInteger('phone');
            $table->bigInteger('s_charge');
            $table->string('s_per_price');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('floor_level');
            $table->string('floor_size');
            $table->string('road_width');
            $table->string('interior_condition');
            $table->bigInteger('price');
            $table->string('per_price');
            $table->string('fire_safety')->nullable();
            $table->string('generator')->nullable();
            $table->string('lift')->nullable();
            $table->string('parking')->nullable();
            $table->string('seat')->nullable();
            $table->string('wifi')->nullable();
            $table->string('gas')->nullable();
            $table->string('electricity')->nullable();
            $table->string('water')->nullable();
            $table->string('ac')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->integer('active')->default(1);
            $table->bigInteger('table_api')->default(10);
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
        Schema::dropIfExists('community__centers');
    }
}
