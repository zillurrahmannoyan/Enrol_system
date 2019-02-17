@extends('layout')
@section('contant')


          <div class="row user-profile" style="width: 800px">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Student Information</h2>
                  <img src="{{URL::to($student_view->student_image)}}" alt="Img" style="height: 60px; width: 80px; border-radius: 50%">
                  <p class="name">{{$student_view->student_name}}</p>
                  <p class="designation">Student Roll : {{$student_view->student_roll}}</p>
                  <a class="email" href="#">{{$student_view->student_email}}</a>
                  <a class="number" href="#">{{$student_view->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="font-family: cursive; font-weight: bolder; color: maroon">Feni Polytechnic Institute</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The Total Information of this student are given below</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Father Name</i>
                      <span style="font-family: vernada; font-size: 16px">{{$student_view->student_fathername}}</span>
                    </a>
                    <a class="social-link">
                      <i class="icon-social-facebook icon">Mother Name</i>
                      <span style="font-family: vernada; font-size: 16px">{{$student_view->student_mothername}}</span>
                    </a>
                     <a class="social-link">
                      <i class="icon-social-facebook icon">Student Address</i>
                      <span style="font-family: vernada; font-size: 16px">{{$student_view->student_address}}</span>
                    </a>
                     <a class="social-link">
                      <i class="icon-social-facebook icon">Student Admission Year</i>
                      <span style="font-family: vernada; font-size: 16px">{{$student_view->student_admissionyear}}</span>
                    </a>
                     <a class="social-link">
                      <i class="icon-social-facebook icon">Student Department</i>
                      <span style="font-family: vernada; font-size: 16px">
                      	@if ($student_view->student_department == 1)
                          		<span class="btn btn-outline-primary">{{'CSE'}}</span>
                          	@elseif($student_view->student_department == 2)
                          		<span class="btn btn-outline-primary">{{'BBA'}}</span>
                          	@elseif($student_view->student_department == 3)
                          		<span class="btn btn-outline-primary">{{'ECE'}}</span>
                          	@elseif($student_view->student_department == 4)
                          		<span class="btn btn-outline-primary">{{'EEE'}}</span>
                          	@elseif($student_view->student_department == 5)
                          		<span class="btn btn-outline-primary">{{'MBA'}}</span>
                          	@else
                          		<span class="btn btn-outline-danger">{{'Not Defined'}}</span>

                          	@endif

                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

           
@endsection