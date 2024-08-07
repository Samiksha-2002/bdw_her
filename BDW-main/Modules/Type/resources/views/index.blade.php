{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Type @endsection
@section('title-align-button')
  <a type="button" class="btn btn-primary m-0 p-2" href="{{ route('admin.type.create') }}">Add Type</a>
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
                  {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ready & Not Ready</th> --}}
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
                <tbody>
                @foreach ($types as $type)
                <tr>
                  <td>{{$type->name}}</td>
                  <td class="align-middle text-center text-sm">
                    <a type="button" href="{{ route('admin.type.edit', ['id' => $type->id] ) }}" class="btn btn-primary">Edit</a>
                       <form action="{{ route('admin.type.destroy', $type->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-danger delete">Delete</button>
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
@endsection
