<?php

use Illuminate\Database\Seeder;

class RecipeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_categories')->insert([
            [
                'id'            => 1,
                'name'          => 'Baking',
                'description'   => null,
                'created_at'    => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
