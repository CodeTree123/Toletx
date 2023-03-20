<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->date('date');
            $table->bigInteger('phone');
            $table->string('description')->nullable();
            $table->bigInteger('s_charge');
            $table->string('s_per_price');
            $table->string('address');
            $table->string('floor_level');
            $table->string('floor_size');
            $table->string('road_width');
            $table->string('interior_condition');
            $table->bigInteger('price');
            $table->string('per_price');
            $table->string('fire_safety')->nullable();
            $table->string('lift')->nullable();
            $table->string('ac')->nullable();
            $table->string('parking')->nullable();
            $table->string('generator')->nullable();
            $table->string('electricity')->nullable();
            $table->string('gas')->nullable();
            $table->string('water')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->integer('active')->default(1);
            $table->bigInteger('table_api')->default(8);
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
        Schema::dropIfExists('offices');
    }
}
