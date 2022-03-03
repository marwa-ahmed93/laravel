@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Categories</h6>
<a type="button" class="btn btn-primary" href="{{ route('admin.cats.create') }}">Add New</a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach($cats as $cat)
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $cat->name}}</td>
      <td>
      <a type="button" class="btn btn-info" href="{{ route('admin.cats.edit' , $cat->id) }}">Edit</a>

      <a type="button" class="btn btn-danger" href="{{ route('admin.cats.delete' , $cat->id) }}">Delete</a>
</td>
    
    </tr>
  @endforeach
  
  </tbody>
</table>





@endsection