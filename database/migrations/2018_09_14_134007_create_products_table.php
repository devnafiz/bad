<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('p_model');
            $table->string('bar_code')->nullable();
            $table->integer('category_id')->unsigned();
            $table->longText('dtails');
            $table->integer('carton_qty');
            $table->float('sell_price',10,2);
            $table->float('supplier_price',10,2);
            $table->string('supplier');
            $table->string('image');


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
        Schema::dropIfExists('products');
    }
}
