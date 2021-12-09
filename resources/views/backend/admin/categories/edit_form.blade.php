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
                <a class="nav-link" href="{{ route("backend.category.index")}}">
                  List categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.category.add")}}">
                  Add category
                </a>
              </li>
</ul>
@endsection
@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Edit {{$title}}</h5>
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('backend.category.update',['id' => $old_category->id])}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Parent</label>
                      <select name="parent_id" class="form-control">
                      <option value = "" {{$old_category->parent_id == null ? 'selected' : ''}}>None</option>
                      @foreach($categories as $category)
                          <option value = "{{$category->id}}" {{$category->id == $old_category->parent_id ? 'selected' : ''}}>{{$category->name}}</option>
                          @foreach(App\Models\Category::where('parent_id',$category->id)->get() as $child_category)
                          <option value="{{$child_category->id}}" {{$child_category->id == $old_category->parent_id ? 'selected' : ''}} >{{$category->name.' > '.$child_category->name}}</option>
                          <!-- @foreach(App\Models\Category::where('parent_id',$child_category->id)->get() as $child)
                          <option value="{{$child->id}}">{{$category->name.' > '.$child_category->name.' > '.$child->name}}</option>
                          @endforeach -->
                          @endforeach
                        @endforeach
                        <!-- @foreach($categories as $c)
                          <option value="{{$c->id}}" {{$c->id == $category->parent_id ? 'selected' : ''}}>{{$c->name}}</option>
                        @endforeach -->
                      </select> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "name">Name</label>
                        <input type="text" id = "name" name = "name" value = "{{$old_category->name}}" class="form-control" placeholder="Enter category name" required/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "slug">Slug</label>
                        <input type = "text" value = "{{$old_category->slug}}" class="form-control" id = "slug" name = "slug" placeholder="" required/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "cover_image">Cover Image</label>
                        <input type="file" name = "cover_image" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div>
                        <label for = "description">Desription</label>
                        <textarea  class="form-control" id = "description" name = "description" placeholder="">{{$old_category->description}}</textarea>
                      </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                  <label>Status</label>
                      <div class="form-group">
                        <input type="radio" name = "status"  value = "1" id = "active" {{$old_category->status == true ? 'checked' : ''}} required/>

                        <label for = "active" >Active</label>

                        <input type="radio" name = "status"  value = "0" id = "in-active" {{$old_category->status == false ? 'checked' : ''}}  required/>

                        <label for = "in-active" >In-active</label>

                        
                      </div>
                    </div>
                  </div>
                  
                  <!-- <div class="row">
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image">Image</label>
                        <input type="file" name = "image" class="form-control">
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                  <div class="col-md-4">
                      <button type = "submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          @if($old_category->cover_image != null)
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
              </div>
              <div class="card-body">
                <div class="author">
                  <a>
                    <img class="avatar border-gray" src="{{ url( 'storage/'.$old_category->cover_image ) }}" alt="No image">
                    <h5 class="title">{{$old_category->name}}</h5>
                  </a>
                  
                  
                </div>
                
              </div>
              <!-- <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div> -->
            </div>
          </div>
          @endif
        </div>
    </div>
    @section('script')
      <script>
            $('#name').change(function (e) {
              $.get("{{route('backend.category.check_slug')}}",
                  { 'name': $(this).val() },
                  function (data) {
                      $('#slug').val(data.slug);
                  }
              );
              
            });
          </script>
        @endsection
@endsection
