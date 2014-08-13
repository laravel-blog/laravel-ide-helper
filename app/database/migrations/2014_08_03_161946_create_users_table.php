<?php

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
        Schema::create('users', function (Blueprint $oTable) {
            $oTable->increments('id');
            $oTable->string('username', 16);
            $oTable->string('password', 64);
            $oTable->string('api_key', 40)->nullable();
            $oTable->index(['username', 'api_key']);
            $oTable->timestamps();

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
