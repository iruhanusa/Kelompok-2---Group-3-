<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminEmail = 'admin@gmail.com';

        $admin = User::firstOrCreate(
            ['email' => $adminEmail],
            [
                'name' => 'Admin User',
                'password' => bcrypt('admin12345'),
                'no_hp' => '1234567890'
            ]
        );

        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        if (!$admin->hasRole('admin')) {
            $admin->assignRole($adminRole);
        }
    }
}
