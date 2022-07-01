<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Http\Models\Word;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'theme_id' => $this->faker->randomDigit(),
            'game_id' => $this->faker->randomDigit()
        ];
    }
}




