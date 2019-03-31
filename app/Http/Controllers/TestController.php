<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('test.ingredient-entry')->with('postData', request()->all() );
    }


    public function purchaseEntry() {
        return view('test.purchase-entry');
    }


    public function purchaseEntryPost() {
        return view('test.purchase-entry')->with('postData', request()->all() );
    }

}
