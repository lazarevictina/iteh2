<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trener>
 */
class TrenerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazivSkole' => $this->faker->company(),
            'jmbg' => $this->faker->numerify('#########'),
            'imePrezime' => $this->faker->name(), 
            'godiste'=> $this->faker->numberBetween($min=1982, $max=2002), 
            'godineIskustva' => $this->faker->numberBetween($min=0, $max=20)
        ];
    }
}
