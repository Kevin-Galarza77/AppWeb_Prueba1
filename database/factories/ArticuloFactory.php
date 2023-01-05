<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $articulo = Articulo::class;

    public function definition()
    {
        return [
            'codigo'=> Str::random(10),
            'descripcion'=>Str::random(50),
            'cantidad'=>$this->faker->numberBetween(1,50),
            'precio'=>$this->faker->numberBetween(1,10000),
        ];
    }
}
