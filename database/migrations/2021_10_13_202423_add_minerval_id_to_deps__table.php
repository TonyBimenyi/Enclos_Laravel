<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinervalIdToDepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deps', function (Blueprint $table) {
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
        Schema::table('deps_', function (Blueprint $table) {
            //
        });
    }
}
