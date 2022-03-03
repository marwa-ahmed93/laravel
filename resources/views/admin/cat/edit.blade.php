@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Categories / Edit / {{ $cat->name }}</h6>
<button type="button" class="btn btn-primary" href="{{ route('admin.cats.index') }}">Back</button>

</div>
@include('admin.inc.errors')
<form method="post" action="{{route('admin.cats.update')}}">
@csrf
<input type="hidden" name="id" value="{{ $cat->id }}">
  <div class="mb-3">
    <label>Name</label>
    <input type="name" name="name" class="form-control" value="{{ $cat->name }}" >
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection