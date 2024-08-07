{{-- @php
  use App\Helper\General;
@endphp --}}
@extends('user.layouts.app')
@section('title') Mindset Questions @endsection
@section('title-align-button')
  <a type="button" class="btn btn-primary m-0 p-2" href="{{ route('admin.question.create') }}">Add Question</a>
@endsection
@section('content')

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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Question</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
                <tbody>
                @foreach ($questions as $item)
                <tr>
                  <td class="text-center">
                    <img src="{{ $item->image }}" alt="" width="40" height="50" class="rounded" />
                  </td>
                  <td>
                    <b>{{$item->question}}</b>
                    @foreach ($item->options as $index => $option)
                      <div><b>{{ $index + 1 }}.</b> {{ $option->option }}</div>
                    @endforeach
                  </td>
                  <td class="align-middle text-center text-sm">
                    <a type="button" href="{{ route('admin.question.edit', ['id' => $item->id] ) }}" class="btn btn-primary btn-sm d-inline p-2">Edit</a>
                    @if($item->is_enable == 1)
                      <a type="button" href="{{ route('admin.question.status.change', ['id' => $item->id, 'status' => 0] ) }}" class="btn btn-success btn-sm d-inline p-2">Enabled</a>
                    @else
                      <a type="button" href="{{ route('admin.question.status.change', ['id' => $item->id, 'status' => 1] ) }}" class="btn btn-warning btn-sm d-inline p-2">Disabled</a>
                    @endif
                    <form action="{{ route('admin.question.destroy', $item->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm p-2 delete">Delete</button>
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
@endsection
