<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_id');
            $table->string('purchase_date');
            $table->string('chalan_no');
            $table->longText('purchase_details')->nullable();
            $table->string('cartoon');
            $table->string('cartoon_item');
            $table->string('product_quantity');
            $table->string('product_rate');
            $table->string('total_price');
            $table->string('grand_total_price');

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
        Schema::dropIfExists('purchase');
    }
}
