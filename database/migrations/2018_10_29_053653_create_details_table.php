<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item')->unsigned()->index();
            $table->foreign('id_item')
                ->references('id')
                ->on('items')
                ->onUpdate('cascade');
            $table->integer('id_cardstock')->unsigned()->index();
            $table->foreign('id_cardstock')
                ->references('id')
                ->on('cardstock')
                ->onUpdate('cascade');
            $table->integer('qty_item');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
