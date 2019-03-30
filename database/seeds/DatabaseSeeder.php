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
            IngredientCategoriesTableSeeder::class,
            IngredientTypesTableSeeder::class,
            MeasureUnitsTableSeeder::class,
        ]);
    }
}
