<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinervalIdToRepportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repports', function (Blueprint $table) {
            $table->unsignedBigInteger('minerval_id');
            $table->foreign('minerval_id')
           ->references('id')
           ->on('minervals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repports', function (Blueprint $table) {
            Schema::dropColumn('minerval_id');
        });
    }
}
