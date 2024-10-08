<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        protected $model = Student::class;

     public function definition(): array
    {

        $classValue = $this->faker->randomElement(['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten']);
        $sectionValue = $this->faker->randomElement(['A', 'B']);

   
        $class = Classes::firstOrNew(
            ['Class' => $classValue, 'Section' => $sectionValue],
        );

        if ($class->exists) {
            $class->increment('total');
        } else {
            $class->total = 1;
            $class->save();
        }

        return [
            'stdName' => fake()->name(),
            'classes_id' => $class->id,
            'stdAddress' => fake()->address(),
            'stdPhone' => fake()->phoneNumber(),
            'Class' => $classValue,
            'Section' => $sectionValue,
            'stdEmail' => fake()->email(),
            'stdPassword' => fake()->password(),
        ];
    }
}
