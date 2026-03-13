<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne(){
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.indexOne', compact('bodyClass'));
    }
    // Home Two 
    public function indexTwo(){
        $bodyClass = 'page-wrapper for-sidebar-menu';
        return view('frontend.homes.indexTwo', compact('bodyClass'));
    }

   
}
