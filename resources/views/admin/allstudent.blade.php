@extends('layout')

@section('content')



 
 
          <div class="card col-md-12">
            <div class="card-body">
              <h2 class="card-title">All Students</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Roll</th>
                          
                          <th>Contact</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Actions</th>
                          {{-- <th>Base Price</th> --}}
                          <th>Address</th>
                          
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                          @foreach($student_info as $data)
                          
                          <tr>
                              <td>{{$data->id}}</td>
                              <td>{{$data->name}}</td>
                              <td>{{$data->roll}}</td>
                              
                              <td>{{$data->phone}}</td>
                              <td>{{$data->fathername}}</td>
                              <td>{{$data->mothername }}</td>
                              {{-- <td><img src="{{URL::to($data->image)}}" height="50px" width="50px"></td> --}}
                              <td>{{$data->address}}</td>
                              <td>{{$data->department}}</td>
                              
                              
                              
                              <td >
                                <a href="{{URL::to('/view/'.$data->id)}}"><button class="btn btn-outline-primary">Views</button></a>
                                
                                <a href="{{URL::to('/delete/'.$data->id)}}"><button class="btn btn-outline-danger">Delete</button></a>
                                
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