<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => $this->faker->name(),
          'contact_number' => $this->faker->phoneNumber(),
          'student_image' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            //
        ];
    }
}
