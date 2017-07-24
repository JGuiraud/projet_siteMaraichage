<?php

use Illuminate\Database\Seeder;

class VegetableSeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '1',
            'season_id' => '2',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '2',
            'season_id' => '1',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '2',
            'season_id' => '2',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '2',
            'season_id' => '3',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '2',
            'season_id' => '4',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '3',
            'season_id' => '1',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '3',
            'season_id' => '2',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '3',
            'season_id' => '3',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '4',
            'season_id' => '3',
        ]);
        DB::table('vegetable_seasons')->insert([
            'vegetable_id' => '4',
            'season_id' => '4',
        ]);
    }
}
