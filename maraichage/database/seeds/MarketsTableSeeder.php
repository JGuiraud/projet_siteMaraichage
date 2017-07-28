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
        'city' => 'Ferme des Moulères, Saint-Frajou',
        'latitude' => '43.3145278',
        'longitude' => '0.8568888',
        'details' => 'Vente à l\'exploitation tous les mercredis de 17h à 19h',
        ]);
    }
}
