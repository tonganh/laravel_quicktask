<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_title' => $this->faker->name(),
            'task_content' => $this->faker->name(),
            'user_id' => $this->faker->unique()->numberBetween(3, 10),
        ];
    }
}
