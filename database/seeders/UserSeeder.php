<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

   
       User:: factory(100)->create();
       $adminRole = Role::firstOrCreate([
        'name' => 'admin',
        'guard_name' => 'web',
        ]); // Ganti 'admin' dengan nama peran admin yang sesua
       $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]); 

        $user->assignRole('admin');
    
}
        }
