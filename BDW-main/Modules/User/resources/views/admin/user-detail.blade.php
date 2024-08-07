{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') User Record @endsection
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
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DOB</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gender</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Blocked Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">{{$user->first_name}} {{$user->last_name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">{{$user->dob}}</td>
                        <td class="text-center">{{$user->gender}}</td>
                        @if($user->status == 1)
                            <td class="text-center">Active</td>
                        @else
                            <td class="text-center">Blocked</td>
                        @endif
                        <td class="text-center">{{$user->blocked_reason}}</td>
                    </tr>
                </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Domain Model-->
  <div class="modal fade" id="blockModal" tabindex="-1" aria-labelledby="domainModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Block User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" class="row" method="POST" id="blockForm">
            @csrf
            {{--<input type="number" name="client_id" hidden value="{{ $clients->first()->id }}">--}}
            <!-- Project Name -->
            <div class="mb-3 col-12 col-lg-12">
              <label for="projectName" class="form-label">Blocked Reason</label>
              <input type="text" class="form-control" id="projectName" name="blocked_reason" required>
            </div>
           
            <!-- Submit Button -->
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" form="add-domain">Save</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  {{-- <script>
    $(document).ready(function() {
      var blockModal = document.getElementById('blockModal')
      blockModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        var action = button.getAttribute('data-bs-action')
        // alert(action);
        var blockForm = blockModal.querySelector('#blockForm')
        blockForm.action = action
      })
    });
  </script> --}}
@endsection
