@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Categories /  Add new</h6>
<button type="button" class="btn btn-primary" href="{{ route('admin.cats.index') }}">Back</button>

</div>
@include('admin.inc.errors')
<form method="post" action="{{ route('admin.cats.store')}}">
@csrf
  <div class="mb-3">
    <label>Name</label>
    <input type="name" name="name" class="form-control" >
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection