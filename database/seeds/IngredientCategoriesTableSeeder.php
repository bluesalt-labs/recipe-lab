<?php

use Illuminate\Database\Seeder;

class IngredientCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_categories')->insert([
            [
                'id'            => 1,
                'name'          => 'Dry',
                'description'   => '',
                'created_at'    => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
