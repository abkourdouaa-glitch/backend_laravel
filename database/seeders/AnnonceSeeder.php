<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('annonces')->insert([
       [
                'titre' => 'Appartement moderne',
                'description' => 'Appartement proche du centre ville',
                'type' => 'Appartement',
                'ville' => 'Casablanca',
                'superficie' => 85,
                'neuf' => true,
                'prix' => 950000.00,
            ],
            [
                'titre' => 'Villa avec piscine',
                'description' => 'Grande villa à louer',
                'type' => 'Villa',
                'ville' => 'Rabat',
                'superficie' => 320,
                'neuf' => false,
                'prix' => 3200000.00,
            ],
            [
                'titre' => 'Magasin commercial',
                'description' => 'Magasin bien situé',
                'type' => 'Magasin',
                'ville' => 'Marrakech',
                'superficie' => 60,
                'neuf' => true,
                'prix' => 450000.00,
            ]
        ]);
    }
}
