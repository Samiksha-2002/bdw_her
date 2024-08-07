@extends('auth.layout.app')
@section('title') Sign In @endsection
@section('content')
    <div class="container">
        <div class="row m-2">
        <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto m-2">
            <div class="shadow-c rounded-15px">
            <div class="card-header pb-0 text-left bg-transparent mb-4">
              <h3><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h3>
              <h4 class="font-weight-bolder text-primary text-gradient">Sign Up</h4>
            </div>
            <div class="card-body">
                <form role="form text-left" method="POST" action="{{ route('auth.signup.post') }}">
                  @csrf
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-check-info text-left">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="{{-- route('terms/conditions')--}}" class="text-dark font-weight-bolder">Terms and Conditions,Privacy Policy</a>
                      </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 mt-2 mb-0">Sign up</button>
                    </div>
                  </form>
               
             
             </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1 mb-2">
                        <p class="text-sm mx-auto mb-0">
                            Already have an account? 
                            <a href="{{-- route('auth.login')--}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                        </p>
                        
                    </div>
                    </div>
        </div>
        
        </div>
    </div>
@endsection