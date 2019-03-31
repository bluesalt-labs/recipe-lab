<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeasureUnit extends Model
{
    const TYPE_COUNT    = 1;
    const TYPE_WEIGHT   = 2;
    const TYPE_VOLUME   = 3;

    const SYSTEM_NONE       = 1;
    const SYSTEM_METRIC     = 2;
    const SYSTEM_CUSTOMARY  = 3;



}
