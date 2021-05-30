@extends('master')
@section('content')
 
      <h1> Create  New Student </h1>
      <form class="form-horizontal" action="{{route('update', $student->id)}}" method="post">
        {{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"  value="{{ $student->name}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="registration_id">Registration:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="registration_no" name="registration_id" placeholder="Enter Name" value="{{ $student->registration_id}}" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="department_name">Department:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="department_name" name="department_name" placeholder="Enter Name" value="{{ $student->department_name}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="info">Info:</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="info" name="info" rows="8"> {{ $student->info}}</textarea>
    </div>
  </div>

  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">UpDate Student</button>
    </div>
  </div>
</form>
@endsection

  
  

 