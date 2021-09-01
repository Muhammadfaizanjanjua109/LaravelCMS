<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'Adress' => $this->faker->address(),
            'father_name' => $this->faker->address(),
            'CNIC' => $this->faker->numberBetween($int1=1,$int2=2151),
            'section_id'=>2,
            'clasec_id'=>2,

        ];
    }
}
