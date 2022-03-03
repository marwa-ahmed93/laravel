@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Students / Edit / {{ $students->name }}</h6>
<a type="button" class="btn btn-primary" href="{{ route('admin.students.index') }}">Back</a>

</div>
@include('admin.inc.errors')
<form method="post" action="{{route('admin.students.update')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $students->id }}">
  <div class="mb-3">
    <label>Name</label>
    <input type="name" name="name" class="form-control" value="{{ $students->name }}" >
  </div>
  <div class="mb-3">
    <label>email</label>
    <input type="text" name="email" class="form-control" value="{{ $students->email }}" >
  </div>
  <div class="mb-3">
    <label>speciality</label>
    <input type="text" name="spec" class="form-control" value="{{ $students->spec }}" >
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection