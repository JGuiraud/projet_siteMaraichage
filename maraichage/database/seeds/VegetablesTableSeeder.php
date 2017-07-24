<?php

use Illuminate\Database\Seeder;

class VegetablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vegetables')->insert([
            'name' => 'tomates',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'pommes de terre',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'oignons',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'carottes',
        ]);
    }
}
