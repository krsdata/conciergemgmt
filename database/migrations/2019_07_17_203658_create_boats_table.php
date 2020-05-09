<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->string('sn_no')->nullable();
            $table->bigInteger('cat_id')->nullable()->unsigned()->index();
            $table->bigInteger('slider_id')->nullable()->unsigned()->index();
            $table->enum('status', ['active', 'inactive'])->nullable()->default('active');
            $table->enum('is_deleted', [0, 1])->nullable()->default(0);
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('boats');
    }
}
