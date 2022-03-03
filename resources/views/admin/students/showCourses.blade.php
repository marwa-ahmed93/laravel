@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Students /  Show courses</h6>
<div>
<a type="button" class="btn btn-info" href="{{ route('admin.students.addCourse', $student_id) }}">Add to course</a>

<a type="button" class="btn btn-primary" href="{{ route('admin.students.index') }}">Back</a>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>

      <th scope="col">Name</th>
      <th scope="col">status</th>
      <th scope="col">Actions</th>
     
     
    </tr>
  </thead>
  <tbody>

@foreach($courses as $c)
<tr>

<td>{{ $loop->iteration }}</td>

<td><p>{{ $c->name }}</p></td>
<td><p>{{ $c->pivot->status }}</p></td>
<td>
@if($c->pivot->status !== 'approve')
      <a type="button" class="btn btn-info" href="{{ route('admin.students.approveCourse' , [$student_id , $c->id]) }}">Approve</a>
@endif
@if($c->pivot->status !== 'reject')
      <a type="button" class="btn btn-danger" href="{{ route('admin.students.rejectCourse' , [$student_id , $c->id]) }}">Reject</a>
@endif
</td>
 
</tr>



@endforeach
  </tbody>
</table>




@endsection