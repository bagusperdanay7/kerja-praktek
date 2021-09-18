<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rekap;

class RekapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rekap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no' => $this->faker->numberBetween(1,100),
            'olo' => $this->faker->sentence(),
            'plan_aktivasi' => $this->faker->numberBetween(1,100),
            'plan_modify' => $this->faker->numberBetween(1,100),
            'plan_disconnect' => $this->faker->numberBetween(1,100),
            'aktivasi' => $this->faker->numberBetween(1,100),
            'modify' => $this->faker->numberBetween(1,100),
            'disconnect' => $this->faker->numberBetween(1,100),
            'resume' => $this->faker->numberBetween(1,100),
            'suspend' => $this->faker->numberBetween(1,100),
        ];
    }
}
