<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ples>
 */
class PlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'naziv'=> $this->faker->randomElement($array = array ('tango','salsa','bacata', 'rumba', 'samba')),
        'opis'=> $this->faker->text($maxNbChars = 150),
        'drzavaPorekla'=> $this->faker->country(),
        'najpoznatijaNumera'=> $this->faker->sentence($nbWords = 2, $variableNbWords = true)
        ];
    }
}
