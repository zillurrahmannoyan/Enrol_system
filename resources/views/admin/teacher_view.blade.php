@extends('layout')
@section('contant')


          <div class="row user-profile" style="width: 800px">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Teacher Information</h2>
                  <img src="{{URL::to($teacher_view->teacher_image)}}" alt="Img" style="height: 60px; width: 80px; border-radius: 50%">
                  <p class="name">{{$teacher_view->teacher_name}}</p>
                  <a class="number" href="#">{{$teacher_view->teacher_phone}}</a>
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="font-family: cursive; font-weight: bolder; color: maroon">Feni Polytechnic Institute</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The Total Information of this teacher are given below</p>
                  </div>
                  <div class="info-links">
                    
                     <a class="social-link">
                      <i class="icon-social-facebook icon">Teacher Address</i>
                      <span style="font-family: vernada; font-size: 16px">{{$teacher_view->teacher_address}}</span>
                    </a>
                     <a class="social-link">
                      <i class="icon-social-facebook icon">Teacher Department</i>
                      <span style="font-family: vernada; font-size: 16px">
                      	@if ($teacher_view->teacher_department == 1)
                          		<span class="btn btn-outline-primary">{{'CSE'}}</span>
                          	@elseif($teacher_view->teacher_department == 2)
                          		<span class="btn btn-outline-primary">{{'BBA'}}</span>
                          	@elseif($teacher_view->teacher_department == 3)
                          		<span class="btn btn-outline-primary">{{'ECE'}}</span>
                          	@elseif($teacher_view->teacher_department == 4)
                          		<span class="btn btn-outline-primary">{{'EEE'}}</span>
                          	@elseif($teacher_view->teacher_department == 5)
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