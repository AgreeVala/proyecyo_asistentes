<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Habilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidades', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->integer('user_id')->unsigned()->nullable(false)
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('habilidad', 255)->nullable(false);
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
         Schema::dropIfExists('habilidades');
    }
}
