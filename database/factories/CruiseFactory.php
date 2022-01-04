<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CruiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $startingDate = $this->faker->dateTimeBetween('-14 days', '+6 days');
        $endingDate = $this->faker->dateTimeBetween($startingDate, strtotime('+7 days'));

        return [
            'departure_at' => $startingDate,
            'return_at'    => $endingDate,
        ];
    }
}
