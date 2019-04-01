<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ingredients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'ingredient_type_id',
    ];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredientType() {
        return $this->belongsTo(IngredientType::class);
    }

    /**
     * All related ingredientCosts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function IngredientCosts() {
        return $this->hasMany(IngredientCost::class);
    }

    /**
     * The most recently purchased related ingredientCost
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cost() {
        return $this->hasOne(IngredientCost::class, 'ingredient_id', 'id')->latest('purchased_at');
    }

}
