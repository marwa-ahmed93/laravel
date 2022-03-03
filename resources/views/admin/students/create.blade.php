@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Students /  Add new</h6>
<button type="button" class="btn btn-primary" href="{{ route('admin.students.index') }}">Back</button>

</div>
@include('admin.inc.errors')
<form method="post" action="{{ route('admin.students.store')}}" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label>email</label>
    <input type="text" name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label>speciality</label>
    <input type="text" name="spec" class="form-control" >
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection