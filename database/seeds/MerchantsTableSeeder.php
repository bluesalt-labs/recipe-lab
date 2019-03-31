<?php

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->insert([
            [
                'id'        => 1,
                'name'      => 'Amazon',
                'logo'      => null,
                'url'       => '',
                'user_id'   => null,
            ],
            [
                'id'        => 2,
                'name'      => 'Costco',
                'logo'      => null,
                'url'       => '',
                'user_id'   => null,
            ],
            [
                'id'        => 3,
                'name'      => 'Walmart',
                'logo'      => null,
                'url'       => '',
                'user_id'   => null,
            ],
            [
                'id'        => 4,
                'name'      => 'Fred Meyer',
                'logo'      => null,
                'url'       => '',
                'user_id'   => null,
            ],
            [
                'id'        => 5,
                'name'      => 'WinCo',
                'logo'      => null,
                'url'       => '',
                'user_id'   => null,
            ],
        ]);
    }
}
