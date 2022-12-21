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
        'naziv'=> $this->faker->unique->randomElement($array = array ('tango',
        'salsa','bacata', 'rumba', 'samba', 'balet', 'folklor', 'savremeni', 'street', 'breakdance',
    'mambo', 'cha-cha-cha', 'hip hop', 'valcer', 'jazz', 'swing', 'trbušni', 'flamenco', 'moonwalk', 
    'zumba', 'contemporary', 'show dance', 'merengue', 'funk', 'quickstep', 'paso doble', 'jive', 'shuffle',
    'hakka', 'jumpstyle', 'cripwalk', 'popping', 'persijski', 'fokstrot', 'kadril', 'mazurka',
    'bolero', 'kankan', 'polka', 'tarantela')),
        'opis'=> $this->faker->text($maxNbChars = 150),
        'drzavaPorekla'=> $this->faker->country(),
        'najpoznatijaNumera'=> $this->faker->sentence($nbWords = 2, $variableNbWords = true)
        ];
    }
}
