<?php

namespace Database\Factories;

use App\Models\Pesanan;
use App\Models\TravelPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PesananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pesanan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'travel_package_id' => TravelPackage::factory()->create()->id,
            'total_price' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed']),
            // Tambahkan atribut lain sesuai kebutuhan
        ];
    }
}
