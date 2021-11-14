<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
@extends('backend.layouts.master')
@section('title')
  Edit {{$title}}
@endsection
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.sub_category.index")}}">
                  List Sub Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.sub_category.add")}}">
                  Add Sub Category
                </a>
              </li>
</ul>
@endsection
@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Edit {{$title}}</h5>
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('backend.sub_category.update',['id' => $sub_category->id])}}">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Select Category</label>
                      <select name="category_id" id="gender" class="form-control" required>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}" {{ $sub_category->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                      </select> 
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Name</label>
                        <input type="text" name = "name" class="form-control"  value = "{{$sub_category->name}}" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                  <label>Status</label>
                      <div class="form-group">
                        <input type="radio" name = "status"  value = "1" id = "active" {{$sub_category->status == true ? 'checked' : ''}}  required>

                        <label for = "active" >Active</label>

                        <input type="radio" name = "status"  value = "0" id = "in-active" {{$sub_category->status == false ? 'checked' : ''}}  required>

                        <label for = "in-active" >In-active</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                      <button type = "submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          
        </div>
    </div>
@endsection
