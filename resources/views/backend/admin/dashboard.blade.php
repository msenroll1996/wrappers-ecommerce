


@extends('backend.layouts.master')
@section('title')
  Admin Dashboard
@endsection


@section('content')

    <div class="content">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2</h5>
                <h4 class="card-title">Executive Committee</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="">List</a>
                    <a class="dropdown-item" href="">Add</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
             
              </div>
              <div class="card-footer">
                 <div class="stats">
                  <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
                </div> 
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2</h5>
                <h4 class="card-title">Members</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="">List</a>
                    <a class="dropdown-item" href="">Add</a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                
              </div>
              <div class="card-footer">
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">3</h5>
                <h4 class="card-title">News and Update</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="">List</a>
                    <a class="dropdown-item" href="">Add</a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
               
              </div>
              <div class="card-footer">
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        
        </div>
      </div>
      @endsection