@extends('frontend.layouts.app')
@section('content')

<section id="search" class="bg-light p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 filter-lists">
                <div class="filter-content mb-3">
                    <h6 class="text-secondary pt-3 pb-3">Categories</h6>
                    <div class="card-body p-0">
                        <div class="custom-control custom-checkbox">
                            <span class="float-right badge badge-light round">52</span>
                              <input type="checkbox" class="custom-control-input" id="Check1">
                              <label class="custom-control-label" for="Check1">Samsung</label>
                        </div> <!-- form-check.// -->
        
                        <div class="custom-control custom-checkbox">
                            <span class="float-right badge badge-light round">132</span>
                              <input type="checkbox" class="custom-control-input" id="Check2">
                             <label class="custom-control-label" for="Check2">Black berry</label>
                        </div> <!-- form-check.// -->
        
                        <div class="custom-control custom-checkbox">
                            <span class="float-right badge badge-light round">17</span>
                              <input type="checkbox" class="custom-control-input" id="Check3">
                              <label class="custom-control-label" for="Check3">Samsung</label>
                        </div> <!-- form-check.// -->
        
                        <div class="custom-control custom-checkbox">
                            <span class="float-right badge badge-light round">7</span>
                              <input type="checkbox" class="custom-control-input" id="Check4">
                              <label class="custom-control-label" for="Check4">Other Brand</label>
                        </div>
                    </div>
                </div>
                <div class="filter-content mb-3">
                    <h6 class="text-secondary pt-3 pb-3">Type</h6>
                    <div class="card-body p-0">
                        <label class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadio" value="">
                        <span class="form-check-label">
                            Course
                        </span>
                        </label>
                        <label class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadio" value="">
                        <span class="form-check-label">
                            Blogs
                        </span>
                        </label>
                    </div>
                </div>
                <div class="filter-content mb-3">
                    <h6 class="text-secondary pt-3 pb-3">Suscriptions</h6>
                    <div class="card-body p-0">
                        <label class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadio" value="">
                        <span class="form-check-label">
                            Free Contents
                        </span>
                        </label>
                        <label class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadio" value="">
                        <span class="form-check-label">
                            Pro Contents
                        </span>
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 p-0 mb-2 search-bar-filter">
                        <input type="search" class="form-control main-search-bar" placeholder="Enter the name of course , blog title , tutorials or author">
                    </div>
                    <div class="col-md-12 mb-4 p-4 course-card-filters">
                        <h5 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h5>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="time">
                                <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="date">
                                <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released 1 hour ago</span>
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="users">
                                <i class="fas fa-users text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Total 119 enrolled</span>
                            </div>
                        </div>
                        <div class="course-category pt-3 pb-3">
                            <a href="">Laravel</a>
                            <a href="">Vue</a>
                            <a href="">PHP</a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 p-4 course-card-filters">
                        <h5 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h5>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="time">
                                <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="date">
                                <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released 1 hour ago</span>
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="users">
                                <i class="fas fa-users text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Total 119 enrolled</span>
                            </div>
                        </div>
                        <div class="course-category pt-3 pb-3">
                            <a href="">Laravel</a>
                            <a href="">Vue</a>
                            <a href="">PHP</a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 p-4 course-card-filters">
                        <h5 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h5>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="time">
                                <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="date">
                                <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released 1 hour ago</span>
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="users">
                                <i class="fas fa-users text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Total 119 enrolled</span>
                            </div>
                        </div>
                        <div class="course-category pt-3 pb-3">
                            <a href="">Laravel</a>
                            <a href="">Vue</a>
                            <a href="">PHP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection