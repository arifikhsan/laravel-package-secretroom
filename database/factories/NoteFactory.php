<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'detail' => $this->faker->paragraph(),
            'weight' => $this->faker->numberBetween(1, 100),
        ];
    }
}
