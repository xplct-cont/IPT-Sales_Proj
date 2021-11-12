<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name', 100);
            $table->string('product_name', 100);
            $table->bigInteger('category_id')->unsigned();
            $table->decimal('retail_price', 10,2);
            $table->decimal('wholesale_price', 10,2);
            $table->bigInteger('unit_id')->unsigned();
            $table->integer('wholesale_qty');
            $table->integer('qty_stock');
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchandises');
    }
}
