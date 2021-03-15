<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Episode;
use App\Models\Suscription;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $courses = Course::with(['categories','suscriptions'])->orderBy('id','desc')->limit(10)->get();
        return view('frontend.pages.home',compact('courses'));
    }

    public function pricing()
    {
        $plans = Suscription::all();
        return view('frontend.pages.pricing',compact('plans'));
    }

    public function singleCourse(Course $course)
    {
        $course->load(['episodes','categories','suscriptions']);
        return view('frontend.pages.single_course',compact('course'));
    }

    public function singleEpisode(Course $course, Episode $episode)
    {
        $episode->load(['media']);
        return view('frontend.pages.single_episode',compact('episode','course'));
    }

    public function watchlistsStore(Request $request)
    {
        // dd($request->all());
        $request->merge(['user_id'=>auth()->id()]);
        $status = auth()->user()->watchlists()->where('course_id',$request->course_id)->first();
        if($status !== null) {
            return response()->json(['type'=>'error','message'=>'Course is already on the watchlist']);
        }
        Watchlist::create($request->all());
        return response()->json(['type'=>'success','message'=>'Successfully Added to Watchlists']);
    }

    public function deleteWatchlists($id)
    {
        $watchlist = Watchlist::find($id);
        $watchlist->delete();
        flash('Watchlist Removed Successfully')->error();
        return redirect()->back();
    }
}
