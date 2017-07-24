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
		'city' => 'Saint-Gaudens',
		'latitude' => '43.1166700',
		'longitude' => '0.7333300',
		'details' => 'tous les jeudis matin',
		]);
	}
}
