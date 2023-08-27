<?php

namespace Database\Factories;

use App\Models\BukuTamU;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuTamUFactory extends Factory
{
    protected $model = BukuTamU::class;

    public function definition()
    {
        $randomDate = $this->faker->dateTimeBetween('this year')->format('Y-m-d H:i:s');
        return [
            'tanggal' => $this->faker->date,
            'nama' => $this->faker->name,
            'asal' => $this->faker->city,
            'pekerjaan' => $this->faker->jobTitle,
            'usia' => $this->faker->randomNumber(2),
            'kesan' => $this->faker->address,
            'pesan' => $this->faker->address,
            'created_at' => $randomDate,
        ];
    }
}
