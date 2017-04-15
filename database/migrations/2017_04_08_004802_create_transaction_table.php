<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            //protected $fillable = ['name','desc','photo'];
            $table->increments('id_transaction');
            $table->integer('id_fish_category')->unsigned();
            $table->integer('id_employee')->unsigned();
            $table->integer('id_supplier')->unsigned();
            $table->integer('amount');
            $table->integer('total_price');
            $table->datetime('datetime')->useCurrent();
            $table->integer('id_transaction_status')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
