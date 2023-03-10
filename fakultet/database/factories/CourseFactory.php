<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $predmeti = ['Internet programitanje', 'Osnivi programiranje 1', 
        'Osnivi programiranje 2', 'Baze podataka 1', 'Baze podataka 2',
        'Grafovi'];
        return [
            'naziv'=>$predmeti[rand(0,5)],
            'ects'=>rand(2,9),
            'status'=>fake()->randomElement(['o', 'i']),
            'opis'=>fake('sr_RS')->realTextBetween()
        ];
    }
}
