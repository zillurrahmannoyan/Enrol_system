@extends('layout')
@section('contant')


<div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
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
                    	@foreach ( $ece_student_info as $v_ece_student )
                      <tr>
                          <td>{{$v_ece_student->student_roll}}</td>
                          <td>{{$v_ece_student->student_name}}</td>
                          <td>{{$v_ece_student->student_phone}}</td>
                          <td>
							<img src="{{URL::to($v_ece_student->student_image)}}" alt="Img" style="height: 60px; width: 80px; border-radius: 50%">
                          </td>
                          <td>{{$v_ece_student->student_address}}</td>
                          <td>
                          	@if ($v_ece_student->student_department == 3)
                          		<span class="btn btn-outline-primary">{{'ECE'}}</span>
                          	@else
                          		<span class="btn btn-outline-danger">{{'Not Defined'}}</span>

                          	@endif
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-success">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
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