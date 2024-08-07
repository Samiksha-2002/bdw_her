@extends('auth.layout.app')
@section('title') Update Password @endsection
@section('content')
    <div class="container">
        <div class="row m-2">
        <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto m-2">
            <div class="shadow-c rounded-15px">
            <div class="card-header pb-0 text-left bg-transparent mb-4">
                <h3><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h3>
                <h4 class="font-weight-bolder text-primary text-gradient">Update Password</h4>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('auth.password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                <label>Email</label>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <label>Password</label>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password"  required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-2 mb-0">Reset Password</button>
                </div>
                </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1 mb-2">
                <p class="text-sm mx-auto mb-0">
                    Don't have an account?
                    <a href="{{ route('auth.signup')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                </p>
                <a href="{{ route('auth.reset.password')}}" class="text-info text-sm font-weight-bold">Forget Password</a>
            </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection