<?php

use Illuminate\Database\Seeder;

class RecipeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_types')->insert([
            [
                'id'                    => 1,
                'recipe_category_id'    => 1,
                'name'                  => 'Cookie',
                'description'           => null,
                'created_at'            => '2019-04-01 00:00:00',
            ],
            [
                'id'                    => 2,
                'recipe_category_id'    => 1,
                'name'                  => 'Cake',
                'description'           => null,
                'created_at'            => '2019-04-01 00:00:00',
            ],
            [
                'id'                    => 3,
                'recipe_category_id'    => 1,
                'name'                  => 'Pastry',
                'description'           => null,
                'created_at'            => '2019-04-01 00:00:00',
            ],
            [
                'id'                    => 4,
                'recipe_category_id'    => 1,
                'name'                  => 'Pie',
                'description'           => null,
                'created_at'            => '2019-04-01 00:00:00',
            ],
            [
                'id'                    => 5,
                'recipe_category_id'    => 1,
                'name'                  => 'Bread',
                'description'           => null,
                'created_at'            => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
