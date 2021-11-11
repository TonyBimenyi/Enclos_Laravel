<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('statis');
        Schema::dropIfExists('stas');
        Schema::create('statistis', function (Blueprint $table) {
            $table->id();
            $table->string('type_depense');
            $table->integer('montant_depense');
            $table->string('description_depense');
            $table->date('date_depense');
            $table->string('type_revenu');
            $table->integer('montant_revenu');
            $table->string('description_revenu');
            $table->date('date_revenu');
            $table->integer('statut');
            $table->string('reserve');
            $table->integer('depense_id');
            $table->integer('revenu_id');
            $table->foreign('depense_id')
           ->references('id')
           ->on('deps')
           ->onDelete('cascade')
           ->onUpdate('cascade');
           $table->foreign('revenu_id')
           ->references('id')
           ->on('revenuses')
           ->onDelete('cascade')
           ->onUpdate('cascade');
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
        Schema::dropIfExists('stats');
    }
}
