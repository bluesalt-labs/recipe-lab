<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeasureUnit extends Model
{
    const TYPE_WEIGHT   = 1;
    const TYPE_VOLUME   = 2;
    //const TYPE_FLUID_VOLUME   = 3; // todo?

    const SYSTEM_CUSTOMARY  = 1;
    const SYSTEM_METRIC     = 2;



}
