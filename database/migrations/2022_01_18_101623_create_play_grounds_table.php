<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('play_grounds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->string('c_name');
            $table->date('date');
            $table->bigInteger('phone');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('area');
            $table->bigInteger('price');
            $table->string('per_price');
            $table->string('shed')->nullable();
            $table->string('toilet')->nullable();
            $table->string('change_room')->nullable();
            $table->string('parking')->nullable();
            $table->string('gym')->nullable();
            $table->string('generator')->nullable();
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
            $table->bigInteger('table_api')->default(17);
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
        Schema::dropIfExists('play_grounds');
    }
}
