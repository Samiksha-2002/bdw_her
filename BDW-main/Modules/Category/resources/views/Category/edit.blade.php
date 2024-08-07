@extends('user.layouts.app')
@section('title') Category @endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card border-bbb">
        <div class="card-body">
            <div>
                <form method="POST" action="{{ route('admin.category.update', ['parent_id' => $category->parent_id, 'id' => $category->id])}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="parent_id" value="{{ $parent_id }}" />
                    <div class="form-group">
                      <label for="exampleInputname">Name</label>
                      <input type="name" class="form-control" id="exampleInputname" name="name" value="{{ old('name', $category->name) }}" aria-describedby="emailHelp" placeholder="Enter name" />
                      @if($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                      @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control" name="group" id="exampleFormControlSelect1">
                          @if($show_ready_not_ready == 0)
                            @foreach($categories_dropdown as $dropdown)
                              <option value="{{  $dropdown->id }}" @if($category->parent_id == $dropdown->id) selected @endif>{{  $dropdown->name }}</option>
                            @endforeach
                          @else
                            <option value="1" @if($category->group == 1) selected @endif>Not Ready</option>
                            <option value="2" @if($category->group == 2) selected @endif>Ready</option>                       
                          @endif
                         </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
