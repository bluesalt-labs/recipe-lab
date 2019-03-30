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
                'id'            => 1,
                'name'          => 'Flour',
                'description'   => '',
                'created_at'    => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
