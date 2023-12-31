<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName("male") . ' ' . $this->faker->lastName("male"),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100, 6000) * 1000,
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'status' => $this->faker->boolean,
            'feature' => json_encode([
                'bed' => $this->faker->numberBetween(1, 10) . ' Bed',
                'bath' => $this->faker->numberBetween(1, 10) . ' Bath',
                'area' => $this->faker->numberBetween(5, 10) . 'x' . $this->faker->numberBetween(5, 10) . ' m²',
            ]),
        ];
    }
}
