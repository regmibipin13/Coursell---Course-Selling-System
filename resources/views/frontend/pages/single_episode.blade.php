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
                    @foreach($course->episodes as $episode)
                    <div class="col-md-12 p-4 course-card-episode bg-light">
                        <h6 class="course-title pt-2 pb-2"><a href="{{ $episode->slug }}">{{ $episode->title }} </a></h6>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="time">
                                <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">{{ $episode->duration }}</span>
                            </div>
                        </div>
                        <div class="play-button">
                            @if($episode->playingNow())
                            <a href="#" style="pointer-events: none; background:green; color:#fff;"><i class="fas fa-play"></i>&nbsp; Now Playing</a>
                            @else
                            <a href="{{ $episode->slug }}"><i class="fas fa-play"></i>&nbsp;Play Episode</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4" style="font-family: monospace;">
                <a href="{{ $course->firstEpisode() }}" class="btn btn-lg btn-custom-primary btn-block">Start Over</a>
                <watchlist :course="{{ $course }}"></watchlist>

                <div class="time mt-5">
                    <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">{{ $course->total_duration }}</span>
                </div>
                &nbsp; &nbsp; &nbsp;
                <div class="date">
                    <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released {{ $course->released_time }}</span>
                </div>
                &nbsp; &nbsp; &nbsp;
            </div>
        </div>
    </div>
</section>
@endsection