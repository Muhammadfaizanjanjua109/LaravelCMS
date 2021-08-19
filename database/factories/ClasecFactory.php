<?php

namespace Database\Factories;

use App\Models\clasec;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasecFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clasec::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            //
        ];
    }
}
