<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TravelPackage;

class TravelPackageSeeder extends Seeder
{
    public function run()
    {
        // Generate 50 travel packages using the factory
        TravelPackage::factory()->count(50)->create();
    }
}
