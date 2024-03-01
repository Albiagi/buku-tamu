<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Albiagi',
                'username' => 'alby23',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('admin23')
            ],
            [
                'name' => 'Rika',
                'username' => 'rika123',
                'email' => 'admin1@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('admin23')
            ]
        ];
        
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
