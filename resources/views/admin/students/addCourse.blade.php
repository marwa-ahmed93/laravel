@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h6>Students / Edit / Add course</h6>
<a type="button" class="btn btn-primary" href="{{ route('admin.students.index') }}">Back</a>

</div>
@include('admin.inc.errors')
<form method="post" action="{{route('admin.students.storeCourse' , $student_id)}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $student_id }}">

<select class="form-control" name="course_id">
@foreach($courses as $course)
<option value="{{$course->id}}">{{ $course->name }}</option>
@endforeach
</select>


  <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>

@endsection