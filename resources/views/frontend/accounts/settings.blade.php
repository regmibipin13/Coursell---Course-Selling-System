@extends('frontend.accounts.app')
@section('account_content')

<section id="account-settings">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 account-edit-form">
                <form action="{{ route('updateProfile') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                        @if($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}">
                        @if($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                        @if($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        @if($errors->has('password_confirmation'))
                        <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>
                    <button class="btn btn-md btn-custom-primary" type="submit">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection