@extends('layout')
@php 
 function convert_department($value) {

 $values=[
     1=>'CSE',
     2=>'BBA',
     3=>'SWE',
     4=>'EEE',
     5=>'MBA',

 ];
  return $values[$value];
}

@endphp
@section('content')

<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}" alt="">
                  <p class="name">{{$student_description_profile->student_name}}</p>
                  <p class="designation">- {{$student_description_profile->student_roll}} -</p>
                  <a class="email" href="#">{{$student_description_profile->student_email}}</a>
                  <a class="number" href="#">{{$student_description_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="color: maroon; font-family: cursive; font-weight: bolder; ">Daffodil International Univarsity</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this student are give bellow.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Fathers Name: </i>
                      <span style="font-family:vardana; font-size: 15px;">{{$student_description_profile->student_fathersname}}</span>
                    </a>

                    <a class="website">
                      <i class="icon-globe icon">Mothers Name: </i>
                      <span style="font-family:vardana; font-size: 15px;">{{$student_description_profile->student_mothersname}}</span>
                    </a>

                    <a class="website">
                      <i class="icon-globe icon">Address: </i>
                      <span style="font-family:vardana; font-size: 15px;">{{$student_description_profile->student_address}}</span>
                    </a>

                    <a class="website">
                      <i class="icon-globe icon">Department: </i>
                      <span style="font-family:vardana; font-size: 15px;">{{convert_department($student_description_profile->student_department)}}</span>
                    </a>
                   <a class="website">
                      <i class="icon-globe icon">Admission Year: </i>
                      <span style="font-family:vardana; font-size: 15px;">{{$student_description_profile->student_admissionyear}}</span>
                    </a>

                  </div>
                </div>
              </div>
            </div>
           
          </div>




@endsection