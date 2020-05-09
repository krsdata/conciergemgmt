<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('position')->unique()->nullable();
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
        Schema::dropIfExists('all_menus');
    }
}
