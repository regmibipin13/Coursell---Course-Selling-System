@extends('frontend.layouts.app')
@section('content')
<section id="pricings" class="bg-light p-5">
    <div class="container">
        <h5 class="text-center pricing-table-subtitle">PRICING PLAN</h5>
        <h1 class="text-center pricing-table-title">Pricing Table</h1>
        <div class="row">
          @foreach($plans as $plan)
          <div class="col-md-6">
            <div class="card pricing-card pricing-plan-basic">
              <div class="card-body">
                <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
                <p class="pricing-plan-title">{{ $plan->name }}</p>
                <h3 class="pricing-plan-cost ml-auto">$.{{ $plan->price }} / {{ $plan->type }}</h3>
                <p class="p-5">
                  {!! $plan->features !!}
                </p>
                <button class="btn pricing-plan-purchase-btn" id="stripeCheckout">Choose</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</section>

@endsection