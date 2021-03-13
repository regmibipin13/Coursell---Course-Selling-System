<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function pricing()
    {
        return view('frontend.pages.pricing');
    }

    public function singleCourse()
    {
        return view('frontend.pages.single_course');
    }

    public function singleEpisode()
    {
        return view('frontend.pages.single_episode');
    }

    public function watchlistsStore(Request $request)
    {
        $request->merge(['user_id'=>auth()->id()]);
        $status = auth()->user()->watchlists()->where('course_id',$request->course_id)->first();
        if($status !== null) {
            return response()->json(['error'=>'Course is already on the watchlist']);
        }
        Watchlist::create($request->all());
        return response()->json(['success'=>'Successfully Added to Watchlists']);
    }
}
