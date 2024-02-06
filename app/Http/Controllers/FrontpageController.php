<?php

namespace App\Http\Controllers;

class FrontpageController extends Controller
{

/*------------------------------------------------------------------------
| Show landing page
|--------------------------------------------------------------------------
**/
    public function index()
    {
        return view('frontpages.landing');
    }
}
