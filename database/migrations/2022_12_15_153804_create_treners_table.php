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
        Schema::create('treners', function (Blueprint $table) { //nasa sema ima 2 polja tj 2 kolone
            $table->id();
            $table->string("nazivSkole");
            $table->integer("jmbg")->unique();
            $table->string("imePrezime");
            $table->integer("godineIskustva");
            $table->timestamps(); //created_at i updated_at polja
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treners');
    }
};
