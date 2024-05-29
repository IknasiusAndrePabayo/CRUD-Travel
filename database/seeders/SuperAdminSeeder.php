<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Andre',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin Users
        for ($i = 1; $i <= 2; $i++) {
            $admin = User::create([
                'name' => 'Admin User ' . $i,
                'email' => 'admin' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $admin->assignRole('Admin');
        }

        // Creating Operator Users
        for ($i = 1; $i <= 5; $i++) {
            $travelagent = User::create([
                'name' => 'Travel Agent' . $i,
                'email' => 'travelagent' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $travelagent->assignRole('Travel Agent');
        }

        // Creating Direktur Users
        for ($i = 1; $i <= 5; $i++) {
            $customer = User::create([
                'name' => 'Customer' . $i,
                'email' => 'customer' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $customer->assignRole('Customer');
        }
    }
}
