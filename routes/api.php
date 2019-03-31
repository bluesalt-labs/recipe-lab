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

        // Measure Units
        Route::apiResource('measure-units', 'MeasureUnitController');

        // Merchants
        Route::apiResource('merchants', 'MerchantController');

        // Merchant Products
        Route::apiResource('merchant-products', 'MerchantProductController');
        Route::apiResource('merchants/{merchant}/products', 'MerchantProductController');

        // Ingredient Categories
        Route::apiResource('ingredient-categories', 'IngredientCategoryController');

        // Ingredient Types
        Route::apiResource('ingredient-types', 'IngredientTypeController');
        Route::apiResource('ingredient-categories/{category}/types', 'IngredientTypeController');

        // Ingredients
        Route::apiResource('ingredients', 'IngredientController');
        Route::apiResource('ingredient-categories/{category}/ingredients', 'IngredientController');
        Route::apiResource('ingredient-types/{type}/ingredients', 'IngredientController');
        Route::apiResource('ingredient-categories/{category}/types/{type}/ingredients', 'IngredientController');

        // Ingredient Costs
        Route::apiResource('ingredient-costs', 'IngredientCostController');
        Route::apiResource('ingredients/{ingredient}/costs', 'IngredientCostController');
        Route::apiResource('ingredient-categories/{category}/ingredients/{ingredient}/costs', 'IngredientCostController');
        Route::apiResource('ingredient-types/{type}/ingredients/{ingredient}/costs', 'IngredientCostController');
        Route::apiResource('ingredient-categories/{category}/types/{type}/ingredients/{ingredient}/costs', 'IngredientCostController');

        // Recipe Categories
        Route::apiResource('recipe-categories', 'RecipeCategoryController');

        // Recipe Types
        Route::apiResource('recipe-types', 'RecipeTypeController');
        Route::apiResource('recipe-categories/{category}/types', 'RecipeTypeController');

        // Recipes
        Route::apiResource('recipes', 'RecipeController');
        Route::apiResource('recipe-categories/{category}/recipes', 'RecipeController');
        Route::apiResource('recipe-types/{type}/recipes', 'RecipeController');
        Route::apiResource('recipe-categories/{category}/types/{type}/recipes', 'RecipeController');

        // Recipe Ingredients
        //Route::apiResource('recipe-ingredients', 'RecipeIngredientController');
        Route::apiResource('recipes/{recipe}/ingredients', 'RecipeIngredientController');
        Route::apiResource('recipe-categories/{category}/recipes/{recipe}/ingredients', 'RecipeIngredientController');
        Route::apiResource('recipe-types/{type}/recipes/{recipe}/ingredients', 'RecipeIngredientController');
        Route::apiResource('recipe-categories/{category}/types/{type}/recipes/{recipe}/ingredients', 'RecipeIngredientController');

        // Recipe Steps
        //Route::apiResource('recipe-steps', 'RecipeStepController');
        Route::apiResource('recipes/{recipe}/steps', 'RecipeStepController');
        Route::apiResource('recipe-categories/{category}/recipes/{recipe}/steps', 'RecipeStepController');
        Route::apiResource('recipe-types/{type}/recipes/{recipe}/ingredients', 'RecipeStepController');
        Route::apiResource('recipe-categories/{category}/types/{type}/recipes/{recipe}/ingredients', 'RecipeStepController');

    });

//});
