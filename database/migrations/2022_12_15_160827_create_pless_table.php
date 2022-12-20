<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pless', function (Blueprint $table) {
            $table->id('id');
            $table->string('naziv');
            $table->string('opis');
            $table->string('zemljaPorekla');
            $table->string('najpoznatijaNumera');
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
        Schema::dropIfExists('pless');
    }
};
