<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Garen', 'Ahri', 'Darius', 'Lux', 'Zed']),
            'role' => $this->faker->randomElement(['Fighter', 'Mage', 'Tank', 'Assassin']),
            'lore' => $this->faker->sentence(15),
            'region' => $this->faker->randomElement(['Demacia', 'Noxus', 'Ionia']),
        ];
    }
}
