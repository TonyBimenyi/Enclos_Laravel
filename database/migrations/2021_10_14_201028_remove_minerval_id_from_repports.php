<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMinervalIdFromRepports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repports', function (Blueprint $table) {
            $table->dropColumn('minerval_id');
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
            $table->unsignedBigInteger('minerval_id');
        });
    }
}
