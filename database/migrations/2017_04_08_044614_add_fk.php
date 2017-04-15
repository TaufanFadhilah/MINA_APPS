<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //logins
        Schema::table('logins', function (Blueprint $table) {
            $table->foreign('id_employee')->references('id_employee')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_employee_status')->references('id_employee_status')->on('employee_statuses')->onDelete('cascade')->onUpdate('cascade');
        });
        //schedules
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('id_employee')->references('id_employee')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_manager')->references('id_employee')->on('employees')->onDelete('cascade')->onUpdate('cascade');
        });
        //absents
        Schema::table('absents', function (Blueprint $table) {
            $table->foreign('id_employee')->references('id_employee')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_absent_status')->references('id_absent_status')->on('absent_statuses')->onDelete('cascade')->onUpdate('cascade');
        });
        //fishes
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('id_fish_category')->references('id_fish_category')->on('fish_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_employee')->references('id_employee')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_transaction_status')->references('id_transaction_status')->on('transaction_statuses')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //fishes
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['id_fish_category']);
            $table->dropForeign(['id_employee']);
            $table->dropForeign(['id_supplier']);
            $table->dropForeign(['id_transaction_status']);
        });

        //absents
        Schema::table('absents', function (Blueprint $table) {
            $table->dropForeign(['id_employee']);
            $table->dropForeign(['id_absent_status']);
        });

        //schedules
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['id_employee']);
            $table->dropForeign(['id_manager']);
        });

        //logins
        Schema::table('logins', function (Blueprint $table) {
            $table->dropForeign(['id_employee']);
            $table->dropForeign(['id_employee_status']);
        });
    }
}
