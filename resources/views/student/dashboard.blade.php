@extends('slayout')

@section('content')
  <div class="col-sm-6 col-md-3 grid-margin text-center">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Teacher</h2>
        <h2 class="card-title">10 </h2>
      </div>

      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
      </div>
    </div>

  </div>
  <div class="col-sm-6 col-md-3 grid-margin text-center">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Tution Fee</h2>
        <h2 class="card-title">5,00,000 Tk.</h2>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-2" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin text-center">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Paid</h2>
        <h2 class="card-title">4,00,000 Tk.</h2>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-3" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin text-center">
    <div class="card ">
      <div class="card-body ">
        <h2 class="card-title">Due</h2>
        <h2 class="card-title ">1,00,000 Tk.</h2>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-4" class="card-float-chart"></div>
      </div>
    </div>
  </div>

@endsection