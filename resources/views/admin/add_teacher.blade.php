@extends('layout')
@section('contant')

<div class="col-12 col-lg-10 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>
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
                          <form class="forms-sample" method="post" action="{{URL::to('/save-teacher')}}" enctype="multipart/form-data" >
                          	{{ csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter teacher name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone" aria-describedby="emailHelp" placeholder="Enter teacher phone" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" aria-describedby="emailHelp" placeholder="Enter teacher address" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Department</label>
                                  <select class="form-control p-input" name="teacher_department">
                                    <option value="1">CSE</option>
                                    <option value="2">BBA</option>
                                    <option value="3">ECE</option>
                                    <option value="4">EEE</option>
                                    <option value="5">MBA</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label>Teacher image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                    </div>
                                  </div>
                              </div>
                              
                              
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>


           
@endsection