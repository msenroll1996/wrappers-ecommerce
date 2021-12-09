@extends('backend.layouts.master')
@section('title')
  Add {{$title}}
@endsection
@section('content')
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.product.index")}}">
                  List Product
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
                <form method = "POST" action = "{{route('backend.product.store')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Name</label>
                        <input type="text" name = "name" class="form-control" id = "name" placeholder="Enter Product Name" required>
                        
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Code</label>
                        <input type="text" name = "code" class="form-control" placeholder="Enter Product Code" required>
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
                        <option value = "{{$category->id}}">{{$category->name}}</option>
                          @foreach(App\Models\Category::where('parent_id',$category->id)->get() as $child_category)
                          <option value="{{$child_category->id}}">{{$category->name.' > '.$child_category->name}}</option>
                          @foreach(App\Models\Category::where('parent_id',$child_category->id)->get() as $child)
                          <option value="{{$child->id}}">{{$category->name.' > '.$child_category->name.' > '.$child->name}}</option>
                          @endforeach
                          @endforeach
                        @endforeach
                      </select> 
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Slug</label>
                        <input type="text" name = "slug" id = "slug" class="form-control" placeholder="Enter slug" required>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Quantity</label>
                        <input type="number" name = "quantity" class="form-control" placeholder="Enter Product quantity" min = "1" required>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Price</label>
                        <input type="text" name = "selling_price" class="form-control" placeholder="Enter Product Price" required>
                        
                      </div>
                    </div>
                  </div>
               
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div>
                        <label for = "description">Desription</label>
                        <textarea  class="form-control" id = "description" name = "description" placeholder="" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 pr-1">
                      <div>
                        <label for = "key_points">Key Points</label>
                        <textarea  class="form-control" id = "key_points" name = "key_points" placeholder="" required></textarea>
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
                          <option value="best_selling">Best Selling</option>
                          <option value="trending">Trending</option>
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