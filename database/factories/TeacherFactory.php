<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'thName' => fake()->name(),
            'thSubject' => $this->faker->randomElement(['Computer', 'Maths', 'Physics', 'Chemistry']),
            'thAddress' => fake()->address(),
            'thPhone' => fake()->phoneNumber(),
            'thEmail' => fake()->email(),
            'thPassword' => fake()->password(),
        ];
    }
}
