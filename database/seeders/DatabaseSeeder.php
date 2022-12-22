<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PlesacSeeder;
use Database\Seeders\TrenerSeeder;
use Database\Seeders\PlesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $trener = new TrenerSeeder;
        $ples = new PlesSeeder;
        $plesac = new PlesacSeeder;

        $trener->run();
        $ples->run();
        $plesac->run();
    }
}
