<?php

namespace Database\Factories;

use App\Models\section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'section_name'=>$this->faker->name(),
            'clasec_id' =>2
        ];
    }
}
