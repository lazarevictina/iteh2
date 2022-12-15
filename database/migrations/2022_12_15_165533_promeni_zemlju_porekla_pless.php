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
        Schema::table('pless', function (Blueprint $table) {
            $table->renameColumn('zemljaPorekla', 'drzavaPorekla');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pless', function (Blueprint $table) {
            $table->renameColumn('drzavaPorekla', 'zemljaPorekla');
        });
    }
};
