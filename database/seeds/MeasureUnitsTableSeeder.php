<?php

use Illuminate\Database\Seeder;
use App\Models\MeasureUnit;

class MeasureUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measure_units')->insert([
            [
                'id'            => 1,
                'name'          => 'Ounce',
                'short_name'    => 'oz',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_CUSTOMARY,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 2,
                'name'          => 'Gram',
                'short_name'    => 'g',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_METRIC,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 3,
                'name'          => 'Pounds',
                'short_name'    => 'lbs',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_CUSTOMARY,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 4,
                'name'          => 'Kilograms',
                'short_name'    => 'oz',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_METRIC,
                'created_at'    => '2019-04-01 00:00:00',
            ],

        ]);
    }
}
