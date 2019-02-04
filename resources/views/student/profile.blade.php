@extends('slayout')

@section('content')

 	      
          
          <div class="container-fluid">
          
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">{{$data->name}}</p>
                  <p class="designation">{{$data->roll}} -</p>
                  <a class="email" href="#">{{$data->email}}</a>
                  <a class="number" href="#">{{$data->phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>10</p><p>Projects</p></li>
                    <li><p>7</p><p>Completed</p></li>
                    <li><p>3</p><p>Under Development</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About Me</h2>
                    <p>Hi,</p>
                    <p>I'm Mimi graduated from DIU in 2018 with a cgpa 3.75. I'm mostly interested in web application development.</p>
                    <p>Thanks</p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-8 side-right">
              
                <div class="content-wrapper">
                    <h1 class="page-title text-center">Timeline</h1>
                    <div class="container-fluid">
                      <div class="row">
                        <ul class="timeline">
                          <li>
                            <div class="timeline-badge info"><i class="mdi mdi-adjust"></i></div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <h4 class="timeline-title">University Get Togather</h4>
                                <p><small class="text-muted">2 August 2017</small></p>
                              </div>
                              <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.</p>
                              </div>
                            </div>
                          </li>
                          <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class="mdi mdi-adjust"></i></div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <h4 class="timeline-title">Tournament 2017</h4>
                              </div>
                              <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.  </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="timeline-badge danger"><i class="mdi mdi-adjust"></i></div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <h4 class="timeline-title">Left Event</h4>
                                <p><small class="text-muted">3 years ago</small></p>
                              </div>
                              <div class="timeline-body">
                                <p>Add more progress events and milestones to the left or right side of the timeline. Each event can be tagged with a date and given a beautiful icon.</p>
                              </div>
                            </div>
                          </li>
                          
                        
                         
                        </ul>
                      </div>
                    </div>
                  </div>
              
            </div>
          </div>
        </div>
 
          
        
@endsection