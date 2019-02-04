@extends('layout')

@section('content')
       
          <div class="card col-12">
            <div class="card-body">
              <h2 class="card-title">EEE Course Teachers</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                     
                      <tr>
                      	  <th>Student Name</th>
                          <th>Department </th>
                          <th>Teacher Name</th>
                      </tr>

                    </thead>

                    <tbody>

                    	@foreach($relatonalData as $data)
		                      
		                      <tr>
		                      	  
		                          <td>{{$data->sname}}</td>
                              <td>{{$data->department}}</td>
		                          <td>{{$data->tname}}</td>	                    	  
		                       </tr>

                      @endforeach

                </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

@endsection