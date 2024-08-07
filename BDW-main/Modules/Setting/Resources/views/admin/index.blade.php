@extends('user.layouts.app')
@section('title') Settings @endsection
@section('content')
<div class="px-0 mx-2">
  <div class="row">
      <div class="card mt-2 py-3">
          <div class="col-12">
            <form action="{{ route('admin.settings.save')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @foreach ($settings as $setting)
                @if ($setting->type=='text')
                  <div class="form-group row">
                      <label for="name" class="form-label fw-bold">{{$setting->label}}</label>
                      <div class="w-100">
                        <input type="text" name="{{$setting->attribute}}" value="{{ $setting->value }}" class="form-control">
                      </div>
                  </div>
                @elseif ($setting->type=='file')
                  <div class="form-group row">
                      <label for="name" class="form-label fw-bold">{{ $setting->label }}</label>
                      <div class="w-100">
                        <input type="file" name="{{ $setting->attribute }}" class="form-control">
                      </div>
                      @if($setting->value)
                        <div class="mt-2" style="height:50px;width:50px;">
                          <img src="{{ $setting->value }}" class="rounded" width="50px" height="50px" />
                        </div>
                      @endif
                  </div>
                @elseif($setting->type=='number')
                  <div class="form-group row">
                      <label for="name" class="form-label">{{$setting->label}}</label>
                      <div class="w-100">
                        <input type="number" name="{{$setting->attribute}}" value="{{ $setting->value }}" class="form-control">
                      </div>
                  </div>
                @elseif($setting->type=='select')
                  <div class="form-group row">
                      <label for="name" class="form-label">{{$setting->label}}</label>
                      <div class="w-100">
                        <select name="{{$setting->attribute}}" value="{{ $setting->value }}" class="form-control">
                          @foreach(explode(',', $setting->possible_values) as $value)
                            <option value="{{ $value }}" @if($setting->value == $value) selected @endif>{{ ucwords($value) }}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                @elseif($setting->type=='textarea')
                  <div class="form-group row">
                      <label for="name" class="form-label">{{$setting->label}}</label>
                      <div class="w-100">
                        <textarea name="{{$setting->attribute}}" rows="5" cols="20" class="form-control">
                          {{$setting->value}}
                        </textarea>
                      </div>
                  </div>
                @endif
              @endforeach
              <button type="submit" class="btn btn-primary text-white mt-3">Update</button>
            </form> 
          </div>
      </div>      
  </div>
</div>
			    
@endsection

@section('script')

@endsection