{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Video @endsection
<style>
    .dropdown-container {
        display: inline-block;
    }
</style>
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
                <form method="POST" action="{{ route('admin.video.save') }}" enctype="multipart/form-data">
                    @csrf
                   
                    {{-- <div class="form-group">
                        <label for="exampleInputname">Name</label>
                        <input type="name" class="form-control" id="exampleInputname" name="name" aria-describedby="emailHelp" placeholder="Enter name" />
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleInputname" req>Title</label>
                        <input type="text" class="form-control" id="exampleInputname" name="title" aria-describedby="emailHelp" placeholder="Enter Title" required/>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputname">Video URL</label>
                        <input type="file" class="form-control" name="video" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputname">Image</label>
                        <input type="file" class="form-control" id="exampleInputname" name="image" aria-describedby="emailHelp" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Type</label>
                        <select class="form-control" name="type_id" id="exampleFormControlSelect1" required>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="dropdown-container col-3">
                        <label for="main_category">Action</label>
                        <select id="main_category" name="action" required>
                            <option value="">Select Action</option>
                            <option value="1">Not Ready</option>
                            <option value="2">Ready</option>
                        </select>
                    </div>
                    <div class="dropdown-container col-4">
                        <label for="category">Category:</label>
                        <select id="category" name="category_id[]" required>
                            <option value="">Select Category</option>
                        </select>
                    </div>
                    <div class="dropdown-container col-4">
                        <label for="sub_category">Sub Category:</label>
                        <select id="sub_category" name="category_id[]" required>
                            <option value="">Select Sub-Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control editor" id="exampleFormControlTextarea1" name="description" rows="5" required></textarea>
                      </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
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
</script>


@endsection
