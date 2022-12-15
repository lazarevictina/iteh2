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
        Schema::create('plesacs', function (Blueprint $table) {
            $table->id();
            $table->string("jmbg")->unique();
            $table->string("ime");
            $table->string("prezime");
            $table->string("eAdresa");
            $table->foreignId("trener_Id")->constrained("treners");
            $table->foreignId("ples_Id")->constrained("pless");
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
        Schema::dropIfExists('plesacs');
    }
};
