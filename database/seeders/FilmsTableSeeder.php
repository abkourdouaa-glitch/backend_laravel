<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;


class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        DB::table('films')->insert([
            [
                'titre' => 'Inception',
                'pays' => 'USA',
                'annee' => 2010,
                'duree' => '02:30:00',
                'genre' => 'Science-fiction',
            ],[
                'titre' => 'Amélie',
                'pays' => 'France',
                'annee' => 2001,
                'duree' => '02:02:00',
                'genre' => 'Romance'
            ],
        ]);
    }
}
