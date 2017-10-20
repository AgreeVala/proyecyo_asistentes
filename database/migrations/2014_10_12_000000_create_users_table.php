<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->string('email', 100)->unique(false);
            $table->string('password', 100)->nullable(false);
            $table->string('ocupacion', 100)->nullable(false);
            $table->integer('edad')->nullable(false);
            $table->integer('activo')->default(1)->nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
