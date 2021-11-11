<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stats');
        Schema::create('statis', function (Blueprint $table) {
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
            $table->timestamps();
            $table->foreign('id_depense')
           ->references('id')
           ->on('deps')
           ->onDelete('cascade')
           ->onUpdate('cascade');
           $table->foreign('id_revenu')
           ->references('id')
           ->on('revenuses')
           ->onDelete('cascade')
           ->onUpdate('cascade');
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
