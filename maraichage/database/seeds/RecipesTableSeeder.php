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
            'title' => 'Soupe de panais',
            'vegetables_names' => '["Panais", "Oignons"]',
            'vegetables_quantity' => '["4", "1"]',
            'ingredients' => '["Bouillon cube de volailles ou légumes", "Eau", "Crème fraîche", "Assaisonnement"]',
            'ingredients_quantity' => '["1", "1L", "1 cuillère à soupe", "Selon goût"]',
            'recipe_text' => '1 - Faire revenir l\'oignon haché dans l\'huile d\'olive. <br> 2 - Ajouter les panais coupés en cubes, le bouillon cube, l\'eau. <br> 3 - Faire cuire une demi-heure. <br> 4 - Mixer puis ajouter la crème fraîche.',
            'front_view' => true,
        ]);
        DB::table('recipes')->insert([
            'title' => 'Recette de blettes',
            'vegetables_names' => '["Blettes", "Oignons"]',
            'vegetables_quantity' => '["8 côtes de blettes avec les feuilles", "1"]',
            'ingredients' => '["Lardons ou chorizo ou saucisse végétale"]',
            'ingredients_quantity' => '["200g"]',
            'recipe_text' => '1 - Faire revenir l\'oignon dans l\'huile d\'olive, avec lardons ou chorizo ou saucisse végétale. <br> 2 - Ajouter les cotes de blettes émincées avec les feuilles, remuer, assaisonner, couvrir et laisser cuire 20 minutes. <br> 3 - Le soir en accompagnement d\'une salade ou garniture de viande ou de poisson. ',
            'front_view' => false,
        ]);
        DB::table('recipes')->insert([
            'title' => 'Aubergines à l\'orientale',
            'vegetables_names' => '["Aubergines", "Ail", "Basilic"]',
            'vegetables_quantity' => '["4", "1 gousse", "1 grosse poignée fraîche"]',
            'ingredients' => '["citron", "Concentré de tomates", "Huile d\'olive"]',
            'ingredients_quantity' => '["1/2", "2 cuillères à soupe", "1 cuillère à soupe"]',
            'recipe_text' => '1 - Faire revenir l\'oignon dans l\'huile d\'olive, avec lardons ou chorizo ou saucisse végétale. <br> 2 - Ajouter les cotes de blettes émincées avec les feuilles, remuer, assaisonner, couvrir et laisser cuire 20 minutes. <br> 3 - Le soir en accompagnement d\'une salade ou garniture de viande ou de poisson. ',
            'front_view' => false,
        ]);
    }
}
(coriandre ou basilic ou persil... suivant gout)
Éplucher partiellement les aubergines, les couper en gros cubes, les cuire à la vapeur avec le citron émincé finement et gousse d'ail coupée en morceau durant 15 minutes. Dans une poêle faire chauffer l'huile d'olive et le concentrée de tomates, bien mélanger. Ajouter les aubergines cuites avec le citron et l'ail, bien mélanger et écraser avec une fourchette (sur le feu). Au bout de 5 minutes retirer du feu, ajouter des herbes fraîches ciselées. 
Déguster froid en entrée 