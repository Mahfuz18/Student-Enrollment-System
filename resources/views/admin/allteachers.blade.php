@extends('layout')

@section('content')
 
 
          
          <div class="card col-md-12">
            <div class="card-body">
              <h2 class="card-title">Faculty</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                      	  <th>Id</th>
                          <th>Name</th>
                          <th>Teacher Id </th>
                          <th>Department </th>
                          <th>Image </th>
  
                      </tr>
                    </thead>

                    <tbody>

                    	@foreach($teachers as $data)
		                      
		                      <tr>
		                      	  <td>{{$data->id}}</td>
		                          <td>{{$data->name}}</td>
		                          <td>{{$data->teacher_id}}</td>
		                          <td>{{$data->department}}</td>
		                    	  <td><img src="{{URL::to($data->phone)}}" height="50px" width="50px"></td>
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