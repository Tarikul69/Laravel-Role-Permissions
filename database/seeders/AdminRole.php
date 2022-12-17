<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class AdminRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::create([
            'name' => 'Admin',
            'email' =>  'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$IZSb7ylfSpv5OMl9FgpFNuic7LVTU8Uz5Jrjrla/Yc7wgbdhMuYsq', // password
          ]);
          $user->assignRole('writer', 'admin');

    }
}
