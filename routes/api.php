<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->group(function() {

    // API Version 1 Routes
    Route::prefix('v1')->name('api.v1.')->namespace('Api')->group(function() {

        // Users
        Route::apiResource('users', 'UserController');
        //Route::get('users/{user}/roles', 'UserController@roles')->name('users.roles');

        // Cost Units
        Route::apiResource('cost-units', 'CostUnitController');

        // Ingredient Categories
        Route::apiResource('ingredient-categories', 'IngredientCategoryController');

        // Ingredients
        Route::apiResource('ingredients', 'IngredientController');

        // Ingredient Costs
        Route::apiResource('ingredient-costs', 'IngredientCostController');

        // Measure Units
        Route::apiResource('measure-units', 'MeasureUnitController');

        // Recipes
        Route::apiResource('recipes', 'RecipeController');

        // Recipe Steps
        Route::apiResource('recipe-steps', 'RecipeStepController');

        // Recipe Ingredients
        Route::apiResource('recipe-ingredients', 'RecipeIngredientController');

    });

//});
