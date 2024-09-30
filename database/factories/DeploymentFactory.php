<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Deployment;

class DeploymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deployment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'ao' => $this->faker->numberBetween(1000,10000),
            'tanggal' => $this->faker->date(),
            'olo' => $this->faker->name(),
            'witel' => $this->faker->name(),
            'produk' => $this->faker->name(),
            'status_ncx' => $this->faker->name(),
            'status_wfm' => $this->faker->name()
        ];
    }
}
