@extends('frontend.accounts.app')
@section('account_content')

<section id="washlists">
    <div class="container pt-5 pb-5">
        <div class="row">
            @if(count($watchlists) <= 0) 
            <div class="col-md-12 text-center">
                <p>No Any Watchlists available</p>
            </div>
            @else
            @foreach($watchlists as $watchlist)
            @php
                $course = $watchlist->course();
            @endphp
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mb-4 p-4 course-card bg-white">
                        <h5 class="course-title pt-2 pb-2"><a href="{{ route('singleCourse',$course->id) }}">{{ $course->name }}</a></h5>
                        <div class="course-components d-flex align-items-center mb-3">
                            <div class="remove-link">
                                <i class="fas fa-trash-alt"></i>&nbsp;<a href="javascript:$('#deleteWatchlist').submit();" class="text-secondary font-weight-bold" id="watchDelete">Remove From List</a>
                                <form action="{{ route('deleteWatchlists',$watchlist->id) }}" method="POST" id="deleteWatchlist">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                        <div class="course-category pt-3 pb-3">
                            @foreach($course->categories as $category)
                            <a href="#">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@push('after-scripts')
<script>
    $('#watchDelete').click(function(e){
        e.preventDefault();
        $('#deleteWatchlist').submit();
    });
</script>
@endpush
    
@endsection