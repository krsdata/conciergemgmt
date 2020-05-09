<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('page_id');
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->integer('sn_no')->nullable();
            $table->string('featured_image')->nullable();
            $table->bigInteger('slider_id')->nullable();
            $table->enum('status', [0, 1])->default(1);
            $table->enum('is_deleted', [0, 1])->default(0)->nullable();
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
        Schema::dropIfExists('page_sections');
    }
}
