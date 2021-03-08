@extends('frontend.accounts.app')
@section('account_content')
    <section id="suscriptions">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Current Suscriptions
                        </div>
                        <div class="card-body">
                            You are currently suscribed to Pro Suscriptions
                            <a href="">Upgrade the suscriptions</a>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            My Features
                        </div>
                        <div class="card-body">
                            <ul class="p-0" style="list-style: none">
                                <li>Feature 1</li>
                                <li>Feature 1</li>
                                <li>Feature 1</li>
                                <li>Feature 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection