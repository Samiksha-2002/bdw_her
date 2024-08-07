@extends('user.layouts.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-sm-6 mb-4">
            <div class="card border-bbb">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8"> 
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Videos</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $count_videos }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa fa-video-camera"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-4">
            <div class="card border-bbb">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Users</p>
                        <h5 class="font-weight-bolder mb-0">
                            {{ $count_users }}
                        </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-4">
            <div class="card border-bbb">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Categories</p>
                        <h5 class="font-weight-bolder mb-0">
                            {{ $count_categories }}
                        </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa fa-list-alt"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-4">
            <div class="card border-bbb">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Mindset Questions</p>
                        <h5 class="font-weight-bolder mb-0">
                            {{ $count_mindset_questions }}
                        </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa fa-question"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-4">
            <div class="card border-bbb">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Products</p>
                        <h5 class="font-weight-bolder mb-0">
                            {{ $count_products }}
                        </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa fa-question"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
