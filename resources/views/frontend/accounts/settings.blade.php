@extends('frontend.accounts.app')
@section('account_content')

<section id="account-settings">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 account-edit-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <button class="btn btn-md btn-custom-primary">Update Profile</button>
            </div>
        </div>
    </div>
</section>

@endsection