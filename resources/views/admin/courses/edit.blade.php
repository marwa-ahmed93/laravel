@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Trainers / Edit / {{ $course->name }}</h6>
<button type="button" class="btn btn-primary" href="{{ route('admin.courses.index') }}">Back</button>

</div>
@include('admin.inc.errors')
<form method="post" action="{{ route('admin.courses.update')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$course->id}}">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ $course->name}}">
  </div>
<div class="form-group">
<select class="form-control" name="cat_id">
@foreach($cats as $cat)
<option value="{{$cat->id}}" @if($course->cat_id == $cat->id) selected @endif>{{ $cat->name }}</option>
@endforeach
</select>
</div>

<div class="form-group my-3">
<select class="form-control" name="trainer_id" aria-label="Default select example">
@foreach($trainers as $t)
<option value="{{$t->id}}" @if($course->trainer_id == $t->id) selected @endif>{{ $t->name }}</option>
@endforeach
</select>
</div>
  <div class="mb-3">
    <label>Small desc</label>
    <input type="text" name="small_desc" class="form-control" value="{{ $course->small_desc }}">
  </div>
  
  <div class="mb-3">
    <label>Desc</label>
    <textarea name="desc" class="form-control" id="" cols="30" rows="10">{{$course->desc}}</textarea>
  </div>

  <div class="mb-3">
    <label>Price</label>
    <input type="number" name="price" class="form-control" value="{{ $course->price }}">
  </div>

  <div class="mb-3">
    <input type="file" name="img" class="form-control-file" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection