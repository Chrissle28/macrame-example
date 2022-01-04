<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName.' ship',
        ];
    }

    public function inactive()
    {
        return $this->state(function (array $attributes) {
            return [
                'active' => false,
            ];
        });
    }
}
