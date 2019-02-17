@extends('layout')
@section('contant')

<div class="col-12 col-lg-10 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student</h2>
			            <p class="alert-success">
			                    <?php
			                        $message = Session::get('message');
			                        if($message)
			                        {
			                             echo $message;
			                            Session::put('message',null);
			                        }
			                        else
			                        {

			                        }

			                    ?>
             			</p>
                          <form class="forms-sample" method="post" action="{{URL::to('/save-student')}}" enctype="multipart/form-data" >
                          	{{ csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter student name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" placeholder="Enter student roll" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Father name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp" placeholder="Enter student father name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mother name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp" placeholder="Enter student mother name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="Enter student email" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="Enter student phone" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" placeholder="Enter student address" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Password" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Admission year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp" placeholder="Student Admission year" required="">
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>
                                  <select class="form-control p-input" name="student_department">
                                  	<option value="1">CSE</option>
                                  	<option value="2">BBA</option>
                                  	<option value="3">ECE</option>
                                  	<option value="4">EEE</option>
                                  	<option value="5">MBA</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label>Student image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                    </div>
                                  </div>
                              </div>
                              
                              
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>


           
@endsection