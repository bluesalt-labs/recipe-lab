<?php

use Illuminate\Database\Seeder;

class CostUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cost_units')->insert([
            [
                'id'            => 1,
                'name'          => 'Dollar',
                'symbol'        => '$',
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 2,
                'name'          => 'Euro',
                'symbol'        => '€',
                'created_at'    => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
