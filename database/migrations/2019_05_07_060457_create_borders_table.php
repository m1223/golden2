<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borders', function (Blueprint $table) {
            $table->increments('id');
            $table ->string('name');
            $table ->string('father');
            $table ->string('mother');
            $table ->string('mobile');
            $table ->string('email');
            $table ->string('room');
            $table ->string('block');
            $table ->string('technology');
            $table ->string('shift');
            $table ->string('semester');
            $table->softDeletes();
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
        Schema::dropIfExists('borders');
    }
}
