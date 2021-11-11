<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinervalIdToRevenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('revenuses', function (Blueprint $table) {
            $table->unsignedBigInteger('minerval_id');
            $table->foreign('minerval_id')
           ->references('id')
           ->on('minerval');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('revenuses', function (Blueprint $table) {
            $table->dropColumn('minerval_id');
        });
    }
}
