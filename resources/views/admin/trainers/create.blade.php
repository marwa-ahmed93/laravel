@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Trainers /  Add new</h6>
<button type="button" class="btn btn-primary" href="{{ route('admin.trainers.index') }}">Back</button>

</div>
@include('admin.inc.errors')
<form method="post" action="{{ route('admin.trainers.store')}}" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" >
  </div>
  <div class="mb-3">
    <label>speciality</label>
    <input type="text" name="spec" class="form-control" >
  </div>

  <div class="mb-3">
    <input type="file" name="img" class="form-control-file" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection