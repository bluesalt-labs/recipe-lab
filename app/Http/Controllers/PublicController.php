<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class StaticController
 *
 * Controller for public pages.
 *
 * @package App\Http\Controllers
 */
class PublicController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        return view('public.index');
    }

}
