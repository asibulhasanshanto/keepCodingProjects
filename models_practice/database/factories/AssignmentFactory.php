<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $classroom = \App\Models\Classroom::inRandomOrder()->first();
        return [
            'text' => $this->faker->text,
            'completed' => $this->faker->boolean,
            'classroom_id' => $classroom->id,
        ];
    }
}
