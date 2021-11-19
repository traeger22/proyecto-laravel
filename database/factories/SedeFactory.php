<?php

namespace Database\Factories;

use App\Models\Sede;
use Illuminate\Database\Eloquent\Factories\Factory;

class SedeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sede::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=> $this->faker->sentence(),
            'codigo_dane' => $this->faker->numerify('########'),
            'establecimiento_id'=> $this->faker->randomElement([1,2,3])
        ];
    }
}
