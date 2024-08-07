{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Videos @endsection
@section('title-align-button')
  <a type="button" class="btn btn-primary m-0 p-2" href="{{ route('admin.video.create') }}">Add Video</a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card border-bbb">
        <!--<div class="card-header pb-0">
          <h6>Projects table</h6>
        </div>-->
        <div class="card-body px-0 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">title</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
                <tbody>
                @foreach ($videos as $video)
                <tr>
                  <td class="text-center">
                    <a href="{{ $video->video }}" target="_blank">
                      <img src="{{ $video->image }}" alt="" class="rounded-lg" width="80" height="80">
                    </a>
                  </td>
                  <td>{{$video->title}}</td>     
                  <td>{{$video->typevideo->name}}</td>
                  <td class="align-middle text-center text-sm">
                    <a type="button" href="{{ route('admin.video.edit', ['id' => $video->id]) }}" class="btn btn-primary btn-sm d-inline p-2">Edit</a>
                    <form action="{{ route('admin.video.destroy', $video->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-danger btn-sm p-2 delete">Delete</button>
                    </form>
                  </td>                
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
