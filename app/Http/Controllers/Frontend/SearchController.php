<?php

namespace App\Http\Controllers\Frontend;

use App\Filters\Courses\CourseFilter;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Suscription;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $suscriptions = Suscription::all();
        return view('frontend.pages.search',compact('categories','suscriptions'));
    }

    public function categories()
    {
        return response()->json(Category::withCount(['courses'])->get());
    }

    public function suscriptions()
    {
        return response()->json(Suscription::withCount(['courses'])->get());
    }

    public function courses(Request $request)
    {
        $courses = CourseFilter::apply($request)->paginate(10);
        return response()->json($courses);
    }
}
