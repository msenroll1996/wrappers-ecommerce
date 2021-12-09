@extends('backend.layouts.master')
@section('title')
  Edit {{$title}}
@endsection
@section('content')


<div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title">  {{$title}}</h5>
                
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('post_change_password')}}">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                    <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
                      <div class="form-group">
                      <label>Password</label>
                        <input type="password" name = "password" class="form-control" placeholder="Enter new password" required>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Confirm Password</label>
                        <input type="password" name = "confirm_password" class="form-control"  placeholder="Enter new password again">
                      </div>
                    </div>
                  </div>
                 
                  
                  <div class="row">
                  <div class="col-md-6">
                  
                          <button type = "submit" class="btn btn-primary btn-block">Change</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection