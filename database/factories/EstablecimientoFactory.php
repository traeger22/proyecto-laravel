<?php

namespace Database\Factories;

use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstablecimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Establecimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'codigo_dane' => $this->faker->numerify('########'),
            'nombre'=> $this->faker->sentence(),
            'secretaria_id'=> $this->faker->randomElement([1,2,3])
        ];
    }
}
