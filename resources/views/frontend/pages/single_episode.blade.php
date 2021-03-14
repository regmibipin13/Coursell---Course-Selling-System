@extends('frontend.layouts.app')
@section('content')
<section id="video-player" style="height: 600px;">
    <vue-core-video-player src="{{ $episode->getMedia('episode')->first()->getUrl() }}"></vue-core-video-player>
</section>   

<section id="episodes-lists" class="pt-5 pb-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 p-4 course-card-episode bg-light">
                        <h6 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h6>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="time">
                                <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                            </div>
                        </div>
                        <div class="play-button">
                            <a href=""><i class="fas fa-play"></i>&nbsp;Play Episode</a>
                        </div>
                    </div>
                    <div class="col-md-12 p-4 course-card-episode bg-light">
                        <h6 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h6>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="time">
                                <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                            </div>
                        </div>
                        <div class="play-button">
                            <a href=""><i class="fas fa-play"></i>&nbsp;Play Episode</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="font-family: monospace;">
                <a href="" class="btn btn-lg btn-custom-primary btn-block">Start Over</a>
                <a href="" class="btn btn-lg btn-secondary btn-block">Watch Later</a>

                <div class="time mt-5">
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
        </div>
    </div>
</section>
@endsection