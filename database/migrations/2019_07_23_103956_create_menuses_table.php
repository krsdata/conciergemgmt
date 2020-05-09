<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('menu_id')->unsigned()->index();
            $table->bigInteger('route_id')->unsigned()->index();
            $table->integer('sn_no');
            $table->bigInteger('parent_route_id')->nullable()->unsigned()->index();
            $table->enum('status', [0, 1])->default(1);
            $table->enum('is_deleted', [0, 1])->default(0)->nullable();
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('all_menus')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('parent_route_id')->references('id')->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
