<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_barang_masuk' => $this->faker->numberBetween(1, 5),
            'id_barang_keluar' => $this->faker->numberBetween(1, 10),
        ];
    }
}
