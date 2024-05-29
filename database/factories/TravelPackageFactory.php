<?php
namespace Database\Factories;

use App\Models\TravelPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelPackageFactory extends Factory
{
    protected $model = TravelPackage::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Menyesuaikan dengan title
            'description' => $this->faker->paragraph, // Menyesuaikan dengan deskripsi
            'price' => $this->faker->randomFloat(2, 100, 10000), // Rentang harga perjalanan
            'duration' => $this->faker->numberBetween(1, 14), // Durasi antara 1 - 14 hari
        ];
    }
}
