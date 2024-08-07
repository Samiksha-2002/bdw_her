{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Question @endsection

<style>
    .option-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px;
    }

    .add-option, .remove-option {
        cursor: pointer;
        font-size: 20px;
        margin-left: 5px;
        color: green;
    }

    .remove-option {
        color: red;
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
        <div class="card-body">
            <div>
                {{-- Update form --}}
                <form method="POST" action="{{ route('admin.question.update', $question->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputname">Question</label>
                        <input type="text" class="form-control" id="exampleInputname" name="question" placeholder="Enter Question" value="{{ $question->question }}" />
                    </div>

                    <div class="form-group">
                        <label for="exampleInputname">Image</label>
                        <input type="file" class="form-control" id="exampleInputname" name="image" placeholder="Enter Question" />
                        <!-- Display existing image -->
                        <img src="{{ asset($question->image) }}" alt="Current Image" width="50">
                    </div>

                    <div class="form-group" id="optionsContainer">
                        <label for="exampleInputname">Options</label>
                        @foreach($question->options as $option)
                            <div class="option-container">
                                <input type="text" class="form-control" name="option[]" placeholder="Enter Option" value="{{ $option->option }}" />
                                <span class="add-option float-end p-3"><i class="fa fa-plus"></i></span>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
            
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $("#optionsContainer").on("click", ".add-option", function(){
        var optionContainer = $(this).closest('.option-container');
        var newOptionField = optionContainer.clone();
        newOptionField.find('input').val('');
        newOptionField.find('.add-option').text('-').removeClass('add-option').addClass('remove-option');
        optionContainer.after(newOptionField);
    });

    // Remove option input field
    $("#optionsContainer").on("click", ".remove-option", function () {
        $(this).closest('.option-container').remove();
    });
  });
</script>
@endsection
