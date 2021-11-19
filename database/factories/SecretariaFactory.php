<?php

namespace Database\Factories;

use App\Models\Secretaria;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecretariaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Secretaria::class;

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
            'ubicacion' => $this->faker->sentence(),
        ];
    }
}
