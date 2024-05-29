<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $travelagent = Role::create(['name' => 'Travel Agent']);
        $customer = Role::create(['name' => 'Customer']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-paket perjalanan',
            'edit-paket perjalanan',
            'delete-paket perjalanan',
            'show-paket perjalanan',
            'create-pesanan',
            'edit-pesanan',
            'delete-pesanan',
            'show-pesanan',
        ]);

        $travelagent->givePermissionTo([
            'create-paket perjalanan',
            'edit-paket perjalanan',
            'delete-paket perjalanan',
            'show-paket perjalanan',
        ]);

        $customer->givePermissionTo([
            'show-paket perjalanan',
        ]);
    }
}

