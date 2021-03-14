@extends('frontend.layouts.app')
@section('content')

<section id="big-img">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-box">
                <h1 class="mb-3">Ready To Learn Something Awesome ?</h1>
                <h4 class="mb-5">Practical screencasts for awesome developers.</h4>
                <form action="{{ route('search') }}" method="GET">
                    <input type="search" placeholder="Enter name of language , course , category etc .. " class="form-control main-search-bar mb-3" name="search">
                </form>
                <h5>Or Just <a href="{{ route('search') }}">Browse All Course</a></h5>
            </div>
        </div>
    </div>
</section>


<section id="course-lists">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-12 text-center">
                <h3>Latest Content</h3>
                <h6 class="text-secondary">Fresh From The Library</h6>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
            <div class="col-md-12 mb-4 p-4 course-card bg-light">
                <h5 class="course-title pt-2 pb-2"><a href="{{ route('singleCourse',$course->id) }}">{{ $course->name }}</a></h5>
                <div class="course-components d-flex align-items-center mb-3">
                    <div class="time">
                        <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">{{ $course->total_duration }}</span>
                    </div>
                    &nbsp; &nbsp; &nbsp;
                    <div class="date">
                        <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released {{ $course->released_time }}</span>
                    </div>
                    &nbsp; &nbsp; &nbsp;
                </div>
                <div class="course-category pt-3 pb-3">
                    @foreach($course->categories as $cat)
                    <a href="">{{ $cat->name }}</a>
                    @endforeach
                </div>
            </div>
            @endforeach

            <div class="col-md-12 mb-4 text-center">
                <a href="{{ route('search') }}" class="btn btn-custom-primary">See All Courses</a>
            </div>
            
        </div>
    </div>
</section>

<section id="suscribtion-section" class="bg-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="pt-2 pb-4">Unlimited access to everything <br />with pro membership.</h3>
                <h6 class="text-secondary pb-3">For the price of a few coffees a month you get access to our entire <br />library of content, and more.</h6>
                <a href="{{ url('/plans') }}" class="btn btn-lg btn-custom-primary">See Our Plans</a>
            </div>
        </div>
    </div>
</section>

<section id="about-author" class="pt-5 pb-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{ asset('img/user.jpeg') }}" alt="User Img" width="150" class="img-fluid author-img">
                <h5 class="text-primary pt-3 pb-1">Sonia Gandiya Ropez</h5>
                <p class="pb-2">Founder / Author</p>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam tempora voluptatem modi. Aliquam explicabo earum vel adipisci itaque omnis provident doloremque quae minima ab. Temporibus consequatur facere voluptatibus eligendi sit!</p>
            </div>
        </div>
    </div>
</section>    
@endsection