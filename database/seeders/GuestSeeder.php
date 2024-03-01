<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guest = [
            [
                'nama_lengkap' => 'Albiagi',
                'alamat' => 'Jatisari, Bekasi',
                'telepon' => '085156641827',
                'email' => 'albyagiw@gmail.com',
                'keperluan' => 'Meeting'
            ],
            [
                'nama_lengkap' => 'Deviena',
                'alamat' => 'Jatisari, Bekasi',
                'telepon' => '085242525678',
                'email' => 'devienamw@gmail.com',
                'keperluan' => 'Meeting'
            ],
            [
                'nama_lengkap' => 'Diandra Aghata',
                'alamat' => 'Jatiasih, Bekasi',
                'telepon' => '085098678909',
                'email' => 'diandra234@gmail.com',
                'keperluan' => 'Meeting'
            ],
        ];

        foreach($guest as $key => $value){
            Guest::create($value);
        }
    }
}
