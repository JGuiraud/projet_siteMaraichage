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
            'name' => 'Tomates',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Pommes de terre',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Oignons',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Carottes',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Choux fleur',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Poireaux',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Ail',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Echalotes',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Haricots verts',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Aubergines',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Courgettes',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Petits pois',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Concombres',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Blettes',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Panais',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Céleris',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Patates douces',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Haricots tarbais',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Mâches',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Poivrons',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Piments',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Batavias',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Laitues',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Scaroles',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Frisées',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Betteraves',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Artichauts',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Basilic',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Menthe',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Thym',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Romarin',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Laurier',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Estragon',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Fraise',
        ]);
        DB::table('vegetables')->insert([
            'name' => 'Navet',
        ]);
    }
}
