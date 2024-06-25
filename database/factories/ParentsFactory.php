<?php

namespace Database\Factories;

use App\Models\Parents;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parents::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'father_name' => $this->faker->name(),
            'father_phone' => $this->faker->phoneNumber(),
            'father_occupation' => $this->faker->jobTitle(),
            'mother_name' => $this->faker->name(),
            'mother_phone' => $this->faker->phoneNumber(),
            'mother_occupation' => $this->faker->jobTitle(),
        ];
    }
}
