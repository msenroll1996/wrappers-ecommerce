@extends('backend.layouts.master')
@section('title')
  Add {{$title}}
@endsection
@section('content')
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.merchandise.index")}}">
                  List Merchandises
                </a>
              </li>
</ul>
@endsection
<div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Add {{$title}}</h5>
                
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('backend.merchandise.store')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Name</label>
                        <input type="text" name = "name" id = "name" class="form-control" placeholder="Enter merchandise Name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Slug</label>
                        <input type="text" name = "slug" id = "slug" class="form-control" placeholder="Enter merchandise Slug" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image">Image</label>
                        <input type="file" name = "image" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div>
                        <label for = "website_link">Website Link</label>
                        <input type = "text"  class="form-control" id = "website_link" name = "website_link" placeholder="Enter website link"/>
                      </div>
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                  <label>Status</label>

                      <div class="form-group">
                        <input type="radio" name = "status"  value = "1" id = "active" checked  required>

                        <label for = "active" >Active</label>

                        <input type="radio" name = "status"  value = "0" id = "in-active"  required>

                        <label for = "in-active" >In-active</label>

                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                        <button type = "submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      @section('script')
      <script>
            $('#name').change(function (e) {
              $.get("{{route('backend.merchandise.check_slug')}}",
                  { 'name': $(this).val() },
                  function (data) {
                      $('#slug').val(data.slug);
                  }
              );
              
            });
          </script>
        @endsection
@endsection