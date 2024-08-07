{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Category @endsection
@section('content')
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#domainModal">
  Add Domain
</button> --}}
<div class="row">
    <div class="col-12">
      <div class="card border-bbb">
        <!--<div class="card-header pb-0">
          <h6>Projects table</h6>
        </div>-->
        <div class="card-body">
            <div>
                <form method="POST" action="{{ route('admin.category.save') }}">
                    @csrf
                    <input type="hidden" name="parent_id" value="{{ $parent_id }}" />
                    <div class="form-group">
                      <label for="exampleInputname">Name</label>
                      <input type="name" class="form-control" id="exampleInputname" name="name" value="{{ old('name') }}" aria-describedby="emailHelp" placeholder="Enter name" />
                      @if($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                      @endif
                    </div>
                    @if($show_ready_not_ready == 0)
                      {{-- @foreach($categories_dropdown as $dropdown)
                          <option value="{{  $dropdown->id }}">{{  $dropdown->name }}</option>
                        @endforeach --}}
                    @else
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control" name="group" id="exampleFormControlSelect1">
                          <option value="1" @if(old('group') == 1) selected @endif>Not Ready</option>
                          <option value="2" @if(old('group') == 2) selected @endif>Ready</option>                       
                        </select>
                        {{-- @if($errors->has('group'))
                          <div class="text-danger">{{ $errors->first('group') }}</div>
                        @endif --}}
                      </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>
@endsection
