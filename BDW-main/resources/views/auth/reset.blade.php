@extends('auth.layout.app')
@section('title') Reset Password @endsection
@section('content')
    <div class="container">
        <div class="row m-2">
        <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto m-2">
            <div class="shadow-c rounded-15px">
            <div class="card-header pb-0 text-left bg-transparent mb-4">
                <h3><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h3>
                <h4 class="font-weight-bolder text-primary text-gradient">Reset Password</h4>
                <p>Enter Your  <label for="" class="font-weight-bolder">E-mail</label> If you Reset</p>
            </div>
            <div class="card-body">
                <form role="form text-left" method="POST" action="{{ route('auth.reset.password_confirmation.post') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 mt-2 mb-0">Reset E-mail</button>
                    </div>
                  </form>
               
             
             </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1 mb-2">
                        <p class="text-sm mx-auto mb-0">
                            <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign in</a>
                        </p>
                        
                    </div>
                    </div>
        </div>
        
        </div>
    </div>
@endsection