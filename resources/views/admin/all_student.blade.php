@extends('layout')
@section('contant')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Student table</h2>
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
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Stdunt Roll</th>
                          <th>Stdunt Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Stdunt Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach ( $all_student_info as $v_student )
                      <tr>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td>
							<img src="{{URL::to($v_student->student_image)}}" alt="Img" style="height: 60px; width: 80px; border-radius: 50%">
                          </td>
                          <td>{{$v_student->student_address}}</td>
                          <td>
                          	@if ($v_student->student_department == 1)
                          		<span class="btn btn-outline-primary">{{'CSE'}}</span>
                          	@elseif($v_student->student_department == 2)
                          		<span class="btn btn-outline-primary">{{'BBA'}}</span>
                          	@elseif($v_student->student_department == 3)
                          		<span class="btn btn-outline-primary">{{'ECE'}}</span>
                          	@elseif($v_student->student_department == 4)
                          		<span class="btn btn-outline-primary">{{'EEE'}}</span>
                          	@elseif($v_student->student_department == 5)
                          		<span class="btn btn-outline-primary">{{'MBA'}}</span>
                          	@else
                          		<span class="btn btn-outline-danger">{{'Not Defined'}}</span>

                          	@endif
                          </td>
                          <td>
                            <a href="{{URL::to('/student-view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('/student-edit/'.$v_student->student_id)}}"><button class="btn btn-outline-success">Edit</button></a>
                            <a href="{{URL::to('/student-delete/'.$v_student->student_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



           
@endsection