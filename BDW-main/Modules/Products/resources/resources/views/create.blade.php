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
                <form method="POST" action="{{ route('admin.question.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputname">Question</label>
                        <input type="text" class="form-control" id="exampleInputname" name="question" placeholder="Enter Question" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputname">image</label>
                        <input type="file" class="form-control" id="exampleInputname" name="image" placeholder="Enter Question" />
                    </div>
                    <div class="form-group" id="optionsContainer">
                        <label for="exampleInputname">Options</label>
                        <div class="option-container">
                            <input type="text" class="form-control" name="option[]" placeholder="Enter Option" />
                            <span class="add-option float-end p-3"><i class="fa fa-plus"></i></span>
                        </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
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

        // Submit the form
        //    $('form').submit(function () {
        //     // Append options as hidden fields before submitting the form
        //     $('.option-container').each(function () {
        //         var optionValue = $(this).find('input').val();
        //         $('<input>').attr({
        //             type: 'hidden',
        //             name: 'options[]',
        //             value: optionValue
        //         }).appendTo('form');
        //     });
        // });
    });

    
</script>

@endsection
