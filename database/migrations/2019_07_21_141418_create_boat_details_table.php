<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boat_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->text('value')->nullable();
            $table->bigInteger('boat_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('boat_id')->references('id')->on('boats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boat_details');
    }
}
