<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item')->unsigned()->index();
            $table->foreign('id_item')
                ->references('id')
                ->on('items')
                ->onUpdate('restrict');
            $table->integer('stock_item');
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
        Schema::dropIfExists('itemlists');
    }
}
