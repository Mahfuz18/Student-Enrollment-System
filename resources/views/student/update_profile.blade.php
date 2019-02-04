@extends('slayout')

@section('content')
<div class="col-md-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Update Information</h2>
              <form class="forms-sample" method="post" action="{{URL::to('/update_sprofile')}}" enctype="multipart/form-data">
                
                {{csrf_field()}}

                <div class="col-md-6 ">
                  <?php
                    $status = Session::get('msg');

                    if($status)
                      echo '<p class="alert-success">'.$status.'</p>';
                    Session::put('msg',null);

                  ?>
                </div>

                  

                      <div class="row">
                            <div class="form-group col-md-6">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" name="name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->name}}">
                           
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" name="address" class="form-control p-input" id="exampleInputPassword1" value="{{$info->address}}">
                            </div>
                          
                            <div class="form-group col-md-6">
                              <label for="exampleInputEmail1">Mobile</label>
                              <input type="text" name="phone" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->phone}}">
                           
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Roll</label>
                                <input type="text" name="roll" class="form-control p-input" id="exampleInputPassword1" value="{{$info->roll}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Enter Password</label>
                                <input type="Password" name="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
                            </div>

                      </div>
                    
                  
                                                       
                  <button type="submit" name="submit" class="btn btn-success">Update</button>
              </form>
          </div>
      </div>
  </div>
@endsection