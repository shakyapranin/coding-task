<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('gender')->unsigned();
            $table->string('phone', 50);
            $table->string('email')->unique();
            $table->string('address', 255);
            $table->string('nationality', 50);
            $table->date('date_of_birth');
            $table->text('education_background');
            $table->tinyInteger('preferred_mode_of_contact')->unsigned();
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
        Schema::drop('personnels');
    }
}
