@extends('auth.layout.app')
@section('title') Sign In @endsection
@section('content')
    <div class="container">
        <div class="row m-2">
        <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto m-2">
            <div class="shadow-c rounded-15px">
            <div class="card-header pb-0 text-left bg-transparent mb-4">
                <h3><a href="{{ url('/') }}">{{ Setting::get('website_name') }}</a></h3>
                <h4 class="font-weight-bolder text-primary text-gradient">Welcome</h4>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('auth.login.post') }}">
                    @csrf
                <label>Email</label>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                </div>
                <label>Password</label>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                {{-- <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div> --}}
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-2 mb-0">Sign in</button>
                </div>
                </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1 mb-2">
                <a href="{{ route('auth.reset.password')}}" class="text-info text-sm font-weight-bold">Forget Password</a>
            </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection