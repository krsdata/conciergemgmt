<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_path')->nullable();
            $table->string('title')->nullable();
            $table->text('details')->nullable();
            $table->bigInteger('slider_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('slider_id')->references('id')->on('sliders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_details');
    }
}
