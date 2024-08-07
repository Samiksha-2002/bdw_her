@php
    use Modules\User\App\Models\UserExtend as MD;
    $model = new MD;
@endphp
@extends('user.layouts.app')
@section('title') User @endsection
@section('content')
    <div class="container">
        <div class="row m-2">
        <div class="col-xl-12 col-lg-12 col-md-6 bg-white text-dark rounded p-3">
            <div class="shadow-c rounded-15px">
            {{--<div class="card-header pb-0 text-left bg-transparent mb-4">
                <h3><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h3>
                <h4 class="font-weight-bolder text-primary text-gradient">Welcome</h4>
            </div>--}}
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    @include('user::admin.form', ['data', $data])
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1 mb-2">
                <p class="text-sm mx-auto mb-0">
                    Don't have an account?
                    <a href="{{ route('auth.signup')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                </p>
                <a href="{{ route('auth.reset.password')}}" class="text-info text-sm font-weight-bold">Forget Password</a>
            </div> --}}
            </div>
        </div>
        
        </div>
    </div>
@endsection