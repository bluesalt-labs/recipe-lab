<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

/**
 * Class TestController
 *
 * Controller for application tests
 *
 * @package App\Http\Controllers
 */
class TestController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('test.index');
    }


    public function ingredientEntry() {
        return view('test.ingredient-entry');
    }


    public function ingredientEntryPost() {
        // todo: I forget where form validation goes, but technically it'd be part of the API controller anyway
        $ingredient = Ingredient::create([
            'name'                  => request()->input('name'),
            'description'           => request()->input('description'),
            'ingredient_type_id'    => intval(request()->input('type')),
        ]);

        return view('test.ingredient-entry')->with('ingredient', $ingredient );
    }


    public function purchaseEntry() {
        return view('test.purchase-entry');
    }


    public function purchaseEntryPost() {
        // todo: I forget where form validation goes, but technically it'd be part of the API controller anyway



        return view('test.purchase-entry')->with('postData', request()->all() );
    }

}
