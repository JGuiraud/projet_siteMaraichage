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
        DB::table('markets')->insert([
        'city' => 'L\'Isle-Jourdain',
        'latitude' => '43.6138369',
        'longitude' => '1.081741',
        'details' => 'Tous les samedis matin de 8h à 14h, L\'Isle-Jourdain ferme ses ruelles pour laisser place au marché piétonnier du centre-ville. Venez à la rencontre de producteurs locaux (fromagers, le canard dans toutes ses déclinaisons, maraichers…), producteurs bio, camelots en tout genre et restauration à emporter.',
        ]);
        DB::table('markets')->insert([
        'city' => 'Colomiers',
        'latitude' => '43.6158927',
        'longitude' => '1.3312616',
        'details' => 'Tous les dimanches, Place de la Naspe.',
        ]);
        DB::table('markets')->insert([
        'city' => 'Samatan',
        'latitude' => '43.4921294',
        'longitude' => '0.9306663',
        'details' => 'Samatan, c\'est surtout ses marchés chaque lundi, toute l\'année. La réputation de Samatan comme centre commercial n’est plus à faire. En effet, Samatan a toujours privilégié son marché, qui est devenu au fil des ans l’une des places les plus actives du Sud-Ouest. Aujourd’hui, le marché au gras de Samatan est le premier marché du Gers, le 1er marché français et le 1er marché du monde dans cette production (source : Association Gersoise pour la Promotion du Foie Gras).',
        ]);
    }
}
