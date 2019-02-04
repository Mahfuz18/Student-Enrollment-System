@extends('layout')

@section('content')
<div class=" col-md-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Add Students</h2>
              <form class="forms-sample" method="post" action="{{URL::to('/savestudent')}}" enctype="multipart/form-data">
                
                {{csrf_field()}}

                <div class="alert-success">
                  <?php
                    $status = Session::get('status');

                    if($status)
                      echo $status;
                    Session::put('status',null);

                  ?>
                </div>

                  <div class="row">
                      <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Roll</label>
                      <input type="text" name="roll" class="form-control p-input" id="exampleInputPassword1" placeholder="Roll">
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
                      <label for="exampleInputEmail1">Contact</label>
                      <input type="text" name="contact" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact">
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Father's Name</label>
                      <input type="text" name="fname" class="form-control p-input" id="exampleInputPassword1" placeholder="Father's Name">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Mother's Name</label>
                      <input type="text" name="mname" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's Name">
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control p-input" id="exampleInputPassword1" placeholder="Address">
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
                      <label for="exampleInputPassword1">Admission Year</label>
                      <input type="date" name="year" class="form-control p-input" id="exampleInputPassword1" placeholder="Admission Year">
                  </div>
                  
                  <div class="form-group col-md-6">
                      <label>Image</label>
                      <div class="row">
                        <div class="col-12">
                          <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                          <input type="file" name="userimage" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">                          
                        </div>
                      </div>
                  </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-success">Add Student</button>
              </form>
          </div>
      </div>
  </div>
@endsection