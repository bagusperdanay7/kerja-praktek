<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Database;

class DatabaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Database::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'witel'=>$this->faker->name(),
            'olo_isp'=>$this->faker->name(),
            'site_kriteria'=>$this->faker->name(),
            'order_type'=>$this->faker->name(),
            'produk'=>$this->faker->name(),
            'satuan'=>$this->faker->name(),
            'status_ncx'=>$this->faker->name()

        ];
    }
}
