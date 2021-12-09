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
                <a class="nav-link" href="{{ route("backend.product.index")}}">
                  List Product
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.product.add")}}">
                  Add Product
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
                <form method = "POST" action = "{{route('backend.product.update',['id' => $product->id])}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Name</label>
                        <input type="text" name = "name" id = "name" class="form-control" value = "{{$product->name}}" placeholder="Enter Product Name" required>
                        
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Code</label>
                        <input type="text" name = "code" class="form-control" value = "{{$product->code}}" placeholder="Enter Product Code" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Select Category</label>
                      <select name="category_id" id="category" class="form-control" required>
                        <option value = "">Select category</option>
                        @foreach($categories as $category)
                        <option value = "{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                          @foreach(App\Models\Category::where('parent_id',$category->id)->get() as $child_category)
                          <option value="{{$child_category->id}}"{{$child_category->id == $product->category_id ? 'selected' : ''}}>{{$category->name.' > '.$child_category->name}}</option>
                          @foreach(App\Models\Category::where('parent_id',$child_category->id)->get() as $child)
                          <option value="{{$child->id}}"{{$child->id == $product->category_id ? 'selected' : ''}}>{{$category->name.' > '.$child_category->name.' > '.$child->name}}</option>
                          @endforeach
                          @endforeach
                        @endforeach
                      </select> 
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Slug</label>
                        <input type="text" name = "slug" id = "slug" value = "{{$product->slug}}" class="form-control" placeholder="Enter Product slug" required>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Price</label>
                        <input type="text" name = "selling_price" value = "{{$product->selling_price}}" class="form-control" placeholder="Enter Product Price" required>
                        
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Quantity</label>
                        <input type="number" name = "quantity" value = "{{$product->quantity}}" class="form-control" placeholder="Enter Product quantity" min = "1" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div>
                        <label for = "description">Desription</label>
                        <textarea  class="form-control" id = "description" name = "description" placeholder="" required>{{$product->description}}</textarea>
                      </div>
                    </div>
                    <div class="col-md-12 pr-1">
                      <div>
                        <label for = "key_points">Key Points</label>
                        <textarea  class="form-control" id = "key_points" name = "key_points" placeholder="" required>{{$product->key_points}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image_first">First Image</label>
                        <input type="file" name = "image_first" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image_second">Second Image</label>
                        <input type="file" name = "image_second" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image_third">Third Image</label>
                        <input type="file" name = "image_third" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                      <label>Display In</label>
                      <select name="display_in" class="form-control">
                        <option value="">Choose</option>
                          <option value="best_selling" {{$product->display_in == 'best_selling' ? 'selected' : ''}}>Best Selling</option>
                          <option value="trending" {{$product->display_in == 'trending' ? 'selected' : ''}}>Trending</option>
                      </select> 
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
                  <div class="col-md-4">
                      <button type = "submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          @if($product->image_first != null)
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{ url( 'storage/'.$product->image_first ) }}" alt="No image">
                    @if($product->image_second != null)<br/><img class="avatar border-gray" src="{{ url( 'storage/'.$product->image_second ) }}" alt="No image">@endif
                    @if($product->image_third != null)<br/><img class="avatar border-gray" src="{{ url( 'storage/'.$product->image_third ) }}" alt="No image">@endif
                    <h5 class="title">Rs {{$product->selling_price}}</h5>
                  </a>
                  
                  <!-- <p class="description">
                    {{$product->description}}
                  </p> -->
                </div>
                
              </div>
              <hr>
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
              $.get("{{route('backend.product.check_slug')}}",
                  { 'name': $(this).val() },
                  function (data) {
                      $('#slug').val(data.slug);
                  }
              );
              
            });
          </script>
      <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
      @endsection
@endsection
