@extends('layout')
@section('contant')

<div class="col-12 col-lg-10 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Student</h2>
			         
                          <form class="forms-sample" method="post" action="{{URL::to('/student-update',$student_edit->student_id)}}" >
                          	{{ csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$student_edit->student_name}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" value="{{$student_edit->student_roll}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Father name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp" value="{{$student_edit->student_fathername}}" >
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mother name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp" value="{{$student_edit->student_mothername}}" >
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" value="{{$student_edit->student_email}}" >
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" value="{{$student_edit->student_phone}}" >
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" value="{{$student_edit->student_address}}" >
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{$student_edit->student_password}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Admission year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp" value="{{$student_edit->student_admissionyear}}">
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>


           
@endsection