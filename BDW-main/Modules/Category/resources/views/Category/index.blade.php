{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Categories @endsection
@section('title-align-button')
  <a type="button" class="btn btn-primary m-0 p-2" href="{{ route('admin.category.create', $parent_id) }}">Add Category</a>
@endsection

<style>
  /* Adjust the height of the select options */
  /* .form-control.choices-single {
      height: 50px; /* Adjust the height as needed *
  }

  /* Additional styling for options if required */
  /* .form-control.choices-single option {
      height: 250px; /* Adjust the height as needed 
  } */ 
</style>
@section('content')
<div class="row">
  <div class="col-12">
    <form class="row g-3">
      <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="inputPassword4" value="{{ request()->name }}">
      </div>
      @if($show_ready_not_ready == 0)
        {{-- @foreach($categories_dropdown as $dropdown)
            <option value="{{  $dropdown->id }}">{{  $dropdown->name }}</option>
        @endforeach --}}
      @else
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Parent</label>
          <select class="form-control choices-single" name="group">
            <option value="0">All</option>
            <option value="1" @if(request()->group == 1) selected @endif>Not Ready</option>
            <option value="2" @if(request()->group == 2) selected @endif>Ready</option>
          </select>
        </div>
      @endif
      {{-- <div class="col-md-4">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div> --}}
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary w-100 adjust-inline-button">Search</button>
      </div>
    </form>
  </div>
</div>

<div class="row">
    <div class="col-12">
      <div class="card border-bbb">
        <div class="card-body px-0 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Parent</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
                <tbody>
                @forelse ($categories as $category)
                <tr>
                  <td>
                    @if($category->parent_id == '0')
                      {{-- parent category view page link --}}
                      <a href="{{ route('admin.category', ['parent_id' => $category->id ]) }}">{{$category->name}} <i class="fa fa-link"></i></a>
                    @else
                      {{$category->name}}
                    @endif
                  </td>
                  <td>
                    @if($category->parent_id != "0")
                      {{ $category->parent->name }}
                    @elseif($category->group == 1)
                      Not Ready     
                    @else
                      Ready
                    @endif
                  </td>
                  <td class="align-middle text-center text-sm">
                    
                    {{-- parent category view page link --}}
                    @if($category->parent_id == '0')
                    <a type="button" href="{{ route('admin.category', ['parent_id' => $category->id]) }}" class="btn btn-success btn-sm d-inline p-2">Show</a>
                    @endif

                    <a type="button" href="{{ route('admin.category.edit', ['parent_id' => $parent_id, 'id' => $category->id]) }}" class="btn btn-primary btn-sm d-inline p-2">Edit</a>
                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-danger btn-sm p-2 delete">Delete</button>
                    </form>
                </td>
                </tr>
                @empty
                  <tr>
                    <td class="text-center" colspan="3">No Record Found</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
