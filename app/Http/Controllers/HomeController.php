<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.accounts.settings');
    }
    
    public function watchlists()
    {
        return view('frontend.accounts.watchlists');
    }

    public function suscriptions()
    {
        return view('frontend.accounts.suscriptions');
    }
}
