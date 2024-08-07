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
        <div class="card-body pb-2">
          <div>
              <form method="POST" action="{{ route('admin.video.update', ['id' => $video->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  {{-- <div class="form-group">
                      <label for="exampleInputname">Name</label>
                      <input type="name" class="form-control" id="exampleInputname" name="name" aria-describedby="emailHelp" placeholder="Enter name" />
                  </div> --}}
                  <div class="form-group">
                      <label for="exampleInputname">Title</label>
                      <input type="text" class="form-control" id="exampleInputname" name="title" value="{{ old('video', $video->title) }}" aria-describedby="emailHelp" placeholder="Enter Title" />
                  </div>
                  <div class="form-group">
                      <label for="exampleInputname">Video / Media</label>
                      <input type="file" class="form-control" name="video" value="{{ old('video', $video->video) }}" />
                      @if($video->video)
                          <video width="150" height="150" controls>
                            <source src="{{ $video->video }}" type="video/mp4" width="150" height="150">
                            Your browser does not support the video tag.
                          </video>
                        </div>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="exampleInputname">Image</label>
                      <input type="file" class="form-control" id="exampleInputname" name="image" value="{{ old('image', $video->image)}}" />
                      @if($video->image)
                        <div class="mt-2" style="height:50px;width:50px;">
                          <img src="{{ $video->image }}" class="rounded" width="50px" height="50px" />
                        </div>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Select Type</label>
                      <select class="form-control" name="type_id" id="exampleFormControlSelect1">
                          @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ old('type_id', $video->type_id) == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                          @endforeach
                      </select>
                  </div>
                 <div class="row">
                      <div class="dropdown-container col-4">
                        <label for="main_category">Action</label>
                        <select id="main_category" name="action">
                            <option value="">Select Action</option>
                            <option value="1" @if($video->action == 1) selected @endif>Not Ready</option>
                            <option value="2" @if($video->action == 2) selected @endif>Ready</option>
                        </select>
                      </div>
                      <div class="dropdown-container col-4">
                        <label for="category">Category:</label>
                        <select id="category" name="category_id[]" multiple>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ in_array($category->id, $videoCategories) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="dropdown-container col-4">
                        <label for="sub_category">Sub Category:</label>
                        <select id="sub_category" name="category_id[]" multiple>
                            @foreach($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}" {{ in_array($subCategory->id, $videoCategories) ? 'selected' : '' }}>
                                    {{ $subCategory->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                 </div>
                  <div class="form-group mt-2">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea class="form-control editor" id="exampleFormControlTextarea1" name="description" rows="5">{{ old('description', $video->description) }}</textarea>
                    </div>

                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
          </div>
      </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
  {{-- <script>
    $(document).ready(function () {
      $('#main_category').change(function(){
        var action_name = $(this).val();
        console.log(action_name); 
        $.ajax({
          url: "/admin/action/name",
          method: 'GET',
          data: { action_name: action_name },
          success: function(data) {
              $('#category').html(data);
          }
        });
      });

      $('#category').change(function(){
        var category = $(this).val();
        //alert(category);
        $.ajax({
          url: "/admin/sub/category",
          method: 'GET',
          data: { category: category }, 
          success: function(data) {
              
              $('#sub_category').html(data);
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.error("AJAX Error: ", textStatus, errorThrown);
          }
        });
      });
    });
</script> --}}

@endsection
