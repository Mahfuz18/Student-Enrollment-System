@extends('layout')

@section('content')
 	{{-- <div class="card col-md-12"> --}}
            <div class="card-body">
              <h2 class="card-title">CSE Department Students</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                      	  <th>Id</th>
                          <th>Name</th>
                          <th>Roll </th>
                          <th>Email </th>
                          <th>Phone </th>
                          <th>Father's Name</th>
                          <th>Mother's Name </th>
                          {{-- <th>Photo </th> --}}
                          <th>Address  </th>
                          <th>Department  </th>
                          <th>Admission Year</th>
                          <th>Action</th>
                          
                      </tr>
                    </thead>

                    <tbody>

                    	@foreach($cse_data as $data)
		                      
		                      <tr>
		                      	  <td>{{$data->id}}</td>
		                          <td>{{$data->name}}</td>
		                          <td>{{$data->roll}}</td>
		                          <td>{{$data->email}}</td>
		                          <td>{{$data->phone}}</td>
		                          <td>{{$data->fathername}}</td>
		                          <td>{{$data->mothername }}</td>
		                          {{-- <td><img src="{{URL::to($data->image)}}" height="50px" width="50px"></td> --}}
		                          <td>{{$data->address}}</td>
		                          <td>{{$data->department}}</td>
		                          <td>{{$data->admissionyear}}</td>
		                          
		                          
		                          <td>
		                            <button class="btn btn-outline-primary">Update</button>
		                            <button class="btn btn-outline-primary text-danger">Delete</button>
		                            
		                          </td>
		                       </tr>

                      @endforeach


                      {{-- <tr>
                          <td>1</td>
                          <td>27/08/12</td>
                          <td>Edinburgh</td>
                          <td>New York</td>
                          <td>$1500</td>
                          <td>$3200</td>
                          <td>1</td>
                          <td>27/08/12</td>
                          <td>Edinburgh</td>
                          <td>New York</td>
                          <td>$1500</td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr> --}}
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection