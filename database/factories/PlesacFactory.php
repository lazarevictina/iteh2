<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trener;
use App\Models\Ples;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plesac>
 */
class PlesacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'jmbg' => $this->faker->numerify('#########'),
        'ime' => $this->faker->firstName(),
        'prezime' => $this->faker->lastName(),
        'eAdresa'=> $this->faker->freeEmail(),
        'trener_Id' => Trener::factory(),
        'ples_Id'=> unique()->Ples::factory()
        ];
    }
}
