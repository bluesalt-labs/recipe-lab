<?php

use Illuminate\Database\Seeder;

class IngredientTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_types')->insert([
            [
                'id'                        => 1,
                'ingredient_category_id'    => 1,
                'name'                      => 'All-Purpose Flour',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 2,
                'ingredient_category_id'    => 3,
                'name'                      => 'White Sugar',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 3,
                'ingredient_category_id'    => 3,
                'name'                      => 'Brown Sugar',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 4,
                'ingredient_category_id'    => 3,
                'name'                      => 'Powdered Sugar',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 5,
                'ingredient_category_id'    => 1,
                'name'                      => 'Salt',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 6,
                'ingredient_category_id'    => 1,
                'name'                      => 'Baking Powder',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 7,
                'ingredient_category_id'    => 2,
                'name'                      => 'Butter',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
            [
                'id'                        => 8,
                'ingredient_category_id'    => 2,
                'name'                      => 'Oil',
                'description'               => null,
                'created_at'                => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
