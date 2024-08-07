<option value="">Select</option>
@foreach($categories as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach

{{-- @foreach($subCategories as $sub_cat)
<option value="{{$sub_cat->id}}">{{$sub_cat->name}}</option>
@endforeach --}}