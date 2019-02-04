@extends('layout')

@section('content')

 	      
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($personaldata->image)}}" alt="">
                  <p class="name">{{$personaldata->name}}</p>
                  <p class="designation">-  {{$personaldata->department}} -</p>
                  <a class="email" href="#">{{$personaldata->email}}</a>
                  <a class="number" href="#">{{$personaldata->phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p class="text-info">General Information (...................garbase text.........................)</p>
                  </div>
                  <div class="info-links">
                    <a class="website" href="https://www.bootstrapdash.com/">
                      <i class="icon-globe icon"></i>
                      <span>{{$personaldata->fathername}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span>{{$personaldata->mothername}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span>{{$personaldata->address}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        
@endsection