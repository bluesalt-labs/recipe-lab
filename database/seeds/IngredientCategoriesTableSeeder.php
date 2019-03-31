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
                'description'   => null,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 2,
                'name'          => 'Fat',
                'description'   => null,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 3,
                'name'          => 'Sugar',
                'description'   => null,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 4,
                'name'          => 'Spices',
                'description'   => null,
                'created_at'    => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
