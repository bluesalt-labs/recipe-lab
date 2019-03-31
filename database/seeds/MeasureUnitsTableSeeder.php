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
                'name'          => 'Count',
                'short_name'    => '',
                'type'          => 0,
                'system'        => 0,
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
                'name'          => 'Milliliter',
                'short_name'    => 'mL',
                'type'          => MeasureUnit::TYPE_VOLUME,
                'system'        => MeasureUnit::SYSTEM_METRIC,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 4,
                'name'          => 'Ounce',
                'short_name'    => 'oz',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_CUSTOMARY,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 5,
                'name'          => 'Fluid Ounce',
                'short_name'    => 'fl oz',
                'type'          => MeasureUnit::TYPE_VOLUME,
                'system'        => MeasureUnit::SYSTEM_CUSTOMARY,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 6,
                'name'          => 'Kilogram',
                'short_name'    => 'kg',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_METRIC,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 7,
                'name'          => 'Liter',
                'short_name'    => 'L',
                'type'          => MeasureUnit::TYPE_VOLUME,
                'system'        => MeasureUnit::SYSTEM_METRIC,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 8,
                'name'          => 'Pound',
                'short_name'    => 'lb',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_CUSTOMARY,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 9,
                'name'          => 'Gallon',
                'short_name'    => 'lb',
                'type'          => MeasureUnit::TYPE_VOLUME,
                'system'        => MeasureUnit::SYSTEM_CUSTOMARY,
                'created_at'    => '2019-04-01 00:00:00',
            ],
            [
                'id'            => 10,
                'name'          => 'Milligram',
                'short_name'    => 'mg',
                'type'          => MeasureUnit::TYPE_WEIGHT,
                'system'        => MeasureUnit::SYSTEM_METRIC,
                'created_at'    => '2019-04-01 00:00:00',
            ],
        ]);
    }
}
