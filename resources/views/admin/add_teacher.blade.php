@extends('layout')
@section('content')


            <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>
           <!--invalid showuo-->
            <p class="alert-success "> 
              <?php
              $exception=Session::get('exception');

              if($exception){
                echo $exception;
                Session::put('exception' ,null);
              }
            ?></p>

          <!--invalid Endshow-->


                          <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                          {{csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teachers Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter Teachers Name">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teachers Phone</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone" placeholder="Enter Teachers Phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teachers Addess</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" placeholder="Enter Teachers Address">
                              </div>
                              
                              
                              
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>

                               
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Department</label>
                                <select class="form-control p-input" name="teacher_department">
                                	<option value="1">CSE</option>
                                	<option value="2">BBA</option>
                                	<option value="3">SWE</option>
                                	<option value="4">EEE</option>
                                	<option value="5">MBA</option>
                                </select>
                               </div>
                              <button type="submit" class="btn btn-success btn-block">Add Teachers</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection