<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhlisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahlis', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->string('no_kp');
          $table->string('no_ahli');
          $table->integer('no_telefon');
          $table->string('email')->unique()->nullable();
          $table->string('alamat');
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
        Schema::dropIfExists('ahlis');
    }
}
