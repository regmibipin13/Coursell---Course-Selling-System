@extends('frontend.layouts.app')
@section('content')
<section id="sidebar" class="pt-5 pb-5 bg-light">
    
    @include('frontend.accounts.sidebar')

    @yield('account_content')
</section>    
@endsection