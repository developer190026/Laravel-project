<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
            return [
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->safeEmail,
                'percentage' => $this->faker->randomFloat(4, 40, 100), // 4 decimals, range 40–100
                'age' => $this->faker->numberBetween(18, 30),
                'countryname' => 'India',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        
    }
}
