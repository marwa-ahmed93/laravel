@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Courses</h6>
<a type="button" class="btn btn-primary" href="{{ route('admin.courses.create') }}">Add New</a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach($courses as $c)
      <th scope="row">{{ $loop->iteration }}</th>
      <td>
  <img src="{{asset('uploads/courses/'.$c->img)}}" height="50px" alt="">
      </td>
      <td>{{ $c->name}}</td>

   
      <td>
      {{ $c->price}}
      </td>

      <td>{{ $c->speciality }}</td>
      <td>
      <a type="button" class="btn btn-info" href="{{ route('admin.courses.edit' , $c->id) }}">Edit</a>

      <a type="button" class="btn btn-danger" href="{{ route('admin.courses.delete' , $c->id) }}">Delete</a>
</td>
    
    </tr>
  @endforeach
  
  </tbody>
</table>





@endsection