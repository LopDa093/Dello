<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'list_id' => $this->faker->numberBetween(1,10),
            'assigned_to' => $this->faker->numberBetween(1,10),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
