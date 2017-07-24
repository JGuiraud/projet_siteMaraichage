<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'title' => 'Soupe de carottes',
            'vegetables_names' => '["carottes", "oignons"]',
            'vegetables_quantity' => '["1kg", 2]',
            'ingredients' => '["eau", "poivre", "curry"]',
            'ingredients_quantity' => '["1 litre", "quelques grains", "1 cuillière à café"]',
            'recipe_text' => '1 - Emincer carottes et oignons. <br> 2 - Mettre les carottes, les oignons, le bouillon et un peu de poivre dans une casserole. Porter à ébullition, couvrir et laisser mijoter 20 mn, jusqu\'à ce que les carottes soient très tendres. <br> 3 - Retirer du feu et laisser légèrement refroidir. <br> 4 -Passer la soupe au mixer ou au moulin à légumes. Ajouter le curry et mélanger.',
            'front_view' => true,
        ]);
    }
}
