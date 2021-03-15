<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $watchlists = Watchlist::where('user_id',auth()->id())->paginate(10);
        return view('frontend.accounts.watchlists',compact('watchlists'));
    }

    public function suscriptions()
    {
        return view('frontend.accounts.suscriptions');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required','confirmed:password_confirmation'],
            'password_confirmation' => 'required'
        ]);

        Auth::user()->update($request->except(['password_confirmation']));
        flash('Profile Updated Successfully')->success();
        return redirect()->back();
    }
}
