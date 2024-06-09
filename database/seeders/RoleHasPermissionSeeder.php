<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign admin role to user with ID 1
        $user = User::find(1);
        $user->assignRole('admin');
      

        // Create a new user and assign farmer role
        $farmer = User::create([
            'name' => 'Farmer',
            'email' => 'farmer@email.test',
            'password' => Hash::make('password')
        ]);
        $farmer->assignRole('farmer');

        $farmers = User::create([
            'name' => 'peter',
            'email' => 'peterr@email.test',
            'password' => Hash::make('password')
        ]);
        $farmers->assignRole('farmer');
    }
}
