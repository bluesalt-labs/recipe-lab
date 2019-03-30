<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ingredient_id');
            $table->integer('cost_unit_id');    // todo: set default in .env
            $table->integer('measure_unit_id');
            $table->decimal('cost_per_unit', 12, 8)->unsigned();
            $table->timestamp('entered_at', 0)->nullable();
            $table->timestamp('created_at', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_costs');
    }
}
