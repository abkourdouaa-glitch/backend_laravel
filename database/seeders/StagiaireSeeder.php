<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stagiaires')->insert([
            [
                'nom'=>'Tazi Laila',
                'genre'=>'F',
                'note'=>12,
                'date'=> "2000-05-04",
                'groupe'=>"f"
            ],
            [
                'nom'=>'John dupont',
                'genre'=>'M',
                'note'=>15,
                'date'=> "2000-05-04",
                'groupe'=>"f"
            ],
            [
                'nom'=>'Soukiana aferdi',
                'genre'=>'F',
                'note'=>16,
                'date'=> "2000-05-04",
                'groupe'=>"f"
            ]
        ]);
    }
}
