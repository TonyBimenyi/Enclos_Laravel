<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinosIdToRepportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repports', function (Blueprint $table) {
            $table->unsignedBigInteger('minos_id')
            ->nullable();
            $table->foreign('minos_id')
           ->references('id')
           ->on('minos');
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
            Schema::dropColumn('minos_id');
        });
    }
}
