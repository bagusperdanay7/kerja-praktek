<?php

namespace Database\Factories;

use App\Models\PekerjaanLapangan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PekerjaanLapanganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PekerjaanLapangan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->date(),
            'witel' => $this->faker->city(),
            'kegiatan' => $this->faker->sentence(3),
            'no_ao' => $this->faker->randomNumber(5, true),
            'olo' => $this->faker->company(),
            'lokasi' => $this->faker->address(),
            'layanan' => $this->faker->word(),
            'bandwidth' => $this->faker->numberBetween(1, 100),
            'datek_gpon' => $this->faker->word(),
            'datek_odp' => $this->faker->word(),
            'keterangan' => $this->faker->sentence(5),

        ];
    }
}
