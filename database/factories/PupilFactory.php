<?php

namespace Database\Factories;

use App\Models\Parents;
use App\Models\pupil;
use Illuminate\Database\Eloquent\Factories\Factory;

class PupilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pupil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parents_id' => Parents::factory(),
            'first_name' => $this->faker->firstName(),
            'father_name' => $this->faker->lastName(),
            'gender' => 'Male'|| 'Female',
            'date_of_birth' => $this->faker->date(),
            'address' => $this->faker->address(),
            'school_fee' => 50000,
            'classes_id' => 1
        ];
    }
}
