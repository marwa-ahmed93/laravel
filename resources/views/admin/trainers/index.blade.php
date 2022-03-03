@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Trainers</h6>
<a type="button" class="btn btn-primary" href="{{ route('admin.trainers.create') }}">Add New</a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">speciality </th>
    
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach($trainers as $t)
      <th scope="row">{{ $loop->iteration }}</th>
      <td>
  <img src="{{asset('uploads/trainrs/'.$t->img)}}" height="50px" alt="">
      </td>
      <td>{{ $t->name}}</td>

   
      <td>
      @if($t->phone !== null)
      {{ $t->phone}}
      @else   
         Not exsist 
           @endif
      </td>

      <td>{{ $t->speciality }}</td>
      <td>
      <a type="button" class="btn btn-info" href="{{ route('admin.trainers.edit' , $t->id) }}">Edit</a>

      <a type="button" class="btn btn-danger" href="{{ route('admin.trainers.delete' , $t->id) }}">Delete</a>
</td>
    
    </tr>
  @endforeach
  
  </tbody>
</table>





@endsection