@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Students</h6>
<a type="button" class="btn btn-primary" href="{{ route('admin.students.create') }}">Add New</a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">speciality</th>
    
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach($students as $s)
      <th scope="row">{{ $loop->iteration }}</th>

      <td>{{ $s->name}}</td>

   
      <td>{{ $s->email}} </td>

      <td>{{ $s->spec}}</td>
      <td>
      <a type="button" class="btn btn-info" href="{{ route('admin.students.edit' , $s->id) }}">Edit</a>

      <a type="button" class="btn btn-danger" href="{{ route('admin.students.delete' , $s->id) }}">Delete</a>
      <a type="button" class="btn btn-primary" href="{{ route('admin.students.showCourses' , $s->id) }}">Show courses</a>

</td>
    
    </tr>
  @endforeach
  
  </tbody>
</table>





@endsection