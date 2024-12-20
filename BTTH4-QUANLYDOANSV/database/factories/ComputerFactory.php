<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'computer_name' => $this->faker->word() . '-' . $this->faker->randomNumber(2),
            'model' => $this->faker->word() . ' ' . $this->faker->randomNumber(4),
            'operating_system' => 'Windows ' . $this->faker->randomElement(['10', '11', 'Server']),
            'processor' => $this->faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5']),
            'memory' => $this->faker->randomElement([8, 16, 32]),
            'available' => $this->faker->boolean(),
        ];
    }
}
