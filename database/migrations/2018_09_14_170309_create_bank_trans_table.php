<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_trans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->integer('bank_id');
            $table->integer('debit')->nullanle();
            $table->integer('credit')->nullable();
            $table->string('description')->nullable();
            $table->string('deposite_id');
            $table->string('amount')->nullable();
            
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
        Schema::dropIfExists('bank_trans');
    }
}
