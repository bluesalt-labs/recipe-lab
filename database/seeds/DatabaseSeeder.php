<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CostUnitsTableSeeder::class,
            MeasureUnitsTableSeeder::class,
            IngredientCategoriesTableSeeder::class,
            IngredientTypesTableSeeder::class,
            RecipeCategoriesSeeder::class,
            RecipeTypesSeeder::class,
            MerchantsTableSeeder::class,
        ]);
    }
}
