<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            'season_name' => 'spring',
            'slug' => 'sp',
        ]);
        DB::table('seasons')->insert([
            'season_name' => 'summer',
            'slug' => 'su',
        ]);
        DB::table('seasons')->insert([
            'season_name' => 'automn',
            'slug' => 'au',
        ]);
        DB::table('seasons')->insert([
            'season_name' => 'winter',
            'slug' => 'wi',
        ]);
    }
}
