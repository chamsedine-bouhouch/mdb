<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Edit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services_demande', function (Blueprint $table) {
            $table->integer('quantite')->nullable();
            $table->integer('prix_total')->nullable();
            
        });
        Schema::table('produit_demande', function (Blueprint $table) {
            $table->integer('quantite')->nullable();
            $table->integer('prix_total')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
