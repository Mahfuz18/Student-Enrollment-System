@extends('layout')

@section('content')
<div class="col-12 col-md-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Add Teacher</h2>
              <form class="forms-sample" method="post" action="{{URL::to('/adding_teacher')}}" enctype="multipart/form-data">
                
                {{csrf_field()}}

                <div class="alert-success">

                  <?php
                    $status = Session::get('teacherstatus');

                    if($status)
                      echo $status;
                    Session::put('teacherstatus',null);

                  ?>

                </div>

                  <div class="row">
                      <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Teacher Id</label>
                      <input type="text" name="teacherid" class="form-control p-input" id="exampleInputPassword1" placeholder="Teacher Id">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Department</label>
                      <select name="department" class="form-control p-input">
                        <option disabled="" selected="">Select Department</option>
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                      </select>
                  </div>
                  
                  <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
                  </div>
                                  
                               
                  <div class="form-group col-md-6">
                      <label>Image</label>
                      <div class="row">
                        <div class="col-12">
                          <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                          <input type="file" name="image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">                          
                        </div>
                      </div>
                  </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-success">Add Teacher</button>
              </form>
          </div>
      </div>
  </div>

@endsection