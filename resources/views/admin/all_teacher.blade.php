@extends('layout')
@section('contant')

<div class="card">
            <div class="card-body">
              <h2 class="card-title">Teacher table</h2>
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
                          <th>Teacher Name</th>
                          <th>Teacher Phone</th>
                          <th>Teacher Address</th>
                          <th>Teacher Department</th>
                          <th>Image</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach ( $all_teacher_info as $v_teacher )
                      <tr>
                          <td>{{$v_teacher->teacher_name}}</td>
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_address}}</td>
                           <td>{{$v_teacher->teacher_department}}</td>
                          <td>
							<img src="{{URL::to($v_teacher->teacher_image)}}" alt="Img" style="height: 60px; width: 80px; border-radius: 50%">
                          </td>
                         
                          <td>
                          	@if ($v_teacher->teacher_department == 1)
                          		<span class="btn btn-outline-primary">{{'CSE'}}</span>
                          	@elseif($v_teacher->teacher_department == 2)
                          		<span class="btn btn-outline-primary">{{'BBA'}}</span>
                          	@elseif($v_teacher->teacher_department == 3)
                          		<span class="btn btn-outline-primary">{{'ECE'}}</span>
                          	@elseif($v_teacher->teacher_department == 4)
                          		<span class="btn btn-outline-primary">{{'EEE'}}</span>
                          	@elseif($v_teacher->teacher_department == 5)
                          		<span class="btn btn-outline-primary">{{'MBA'}}</span>
                          	@else
                          		<span class="btn btn-outline-danger">{{'Not Defined'}}</span>

                          	@endif
                          </td>
                          <td>
                            <a href="{{URL::to('/teacher-view/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('/teacher-delete/'.$v_teacher->teacher_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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