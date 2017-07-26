<?php

use Illuminate\Database\Seeder;

class MarketsTableSeeder extends Seeder
{
    
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('markets')->insert([
        'city' => 'Saint-Frajou',
        'latitude' => '43.333316',
        'longitude' => '0.849494',
        'details' => 'Vente à l\'exploitation tous les mercredis de 17h à 19h',
        ]);
    }
}
