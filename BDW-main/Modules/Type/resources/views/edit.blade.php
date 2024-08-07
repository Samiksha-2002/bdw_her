{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Type @endsection
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
        <div class="card-body px-0 pb-2">
            <div>
                <form method="POST" action="{{ route('admin.type.update', ['id' => $type->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputname">Name</label>
                        <input type="name" class="form-control" id="exampleInputname" name="name" value="{{$type->name}}" aria-describedby="emailHelp" placeholder="Enter name" />
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control" name="group" id="exampleFormControlSelect1">
                            <option value="1" {{ old('group', $category->group) == 1 ? 'selected' : '' }}>Not Ready</option>
                            <option value="2" {{ old('group', $category->group) == 1 ? 'selected' : ''}}>Ready</option>
                        </select>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>
@endsection
