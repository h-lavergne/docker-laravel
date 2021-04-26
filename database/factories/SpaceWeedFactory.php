<?php

namespace Database\Factories;

use App\Models\SpaceWeed;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpaceWeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpaceWeed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'price' => random_int(10, 1600),
            'quantity' => random_int(300, 2000)
        ];
    }
}
