@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Trainers / Edit / {{ $trainer->name }}</h6>
<button type="button" class="btn btn-primary" href="{{ route('admin.trainers.index') }}">Back</button>

</div>
@include('admin.inc.errors')
<form method="post" action="{{route('admin.trainers.update')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $trainer->id }}">
  <div class="mb-3">
    <label>Name</label>
    <input type="name" name="name" class="form-control" value="{{ $trainer->name }}" >
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" value="{{ $trainer->phone }}" >
  </div>
  <div class="mb-3">
    <label>speciality</label>
    <input type="text" name="spec" class="form-control" value="{{ $trainer->speciality }}" >
  </div>
<img src="{{ asset('uploads/trainers/'.$trainer->img)}}" height="100px" alt="" class="my-5">
  <div class="mb-3">
    <input type="file" name="img" class="form-control-file" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection