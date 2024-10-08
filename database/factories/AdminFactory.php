<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Admin::class;

    public function definition(): array
    {
        return [
            'adminUserName' => fake()->userName(),
            'adminEmail' => fake()->email(),
            'adminPassword' => fake()->password(),
        ];
    }
}
