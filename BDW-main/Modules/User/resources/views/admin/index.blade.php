{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Users Record @endsection
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DOB</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gender</th>
                  {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th> --}}
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
               <tbody>
                @foreach ($users as $user)
                @if ($user->status == 1)
                  @php $tr_css = ''; @endphp
                @else
                  @php $tr_css = 'bg-block'; @endphp
                @endif
                <tr class="{{ $tr_css }}">
                  <td>
                    <a class="text-primary fw-bold" href="{{ route('admin.user.show', ['id' => $user->id]) }}">
                        {{$user->first_name}} {{$user->last_name}}
                    </a>
                  </td>
                  
                  <td>{{$user->email}}</td>
              
                  <td>{{$user->dob}}</td>
                  
                  <td>{{$user->gender}}</td>
                  
                  <td class="align-bottom text-center text-sm">
                    <a type="button" href="{{ route('admin.user.show', ['id' => $user->id]) }}" class="btn btn-primary btn-sm d-inline p-2">Detail</a>
                    {{-- <a type="button" href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-sm d-inline p-2" >edite</a> --}}
                      @if ($user->status == 1)
                        <a type="button" data-bs-action="{{ route('admin.user.block', ['id' => $user->id]) }}" class="btn btn-warning btn-sm d-inline p-2" data-bs-toggle="modal" data-bs-target="#blockModal">&nbsp;&nbsp;&nbsp;Block&nbsp;&nbsp;&nbsp;</a> 
                      @else
                        <a type="button" href="{{ route('admin.user.unblock', ['id' => $user->id]) }}" class="btn btn-success btn-sm d-inline p-2">Unblock</a>
                      @endif
                      <form action="{{ route('admin.user.destroy', $user->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm p-2 delete">Delete</button>
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
          <button type="submit" class="btn btn-primary" form="blockForm">Save</button>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
  <script>
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
  </script>
@endsection
