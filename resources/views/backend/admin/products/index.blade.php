@extends('backend.layouts.master')
@section('title')
  List {{$title}}
@endsection
@section('search')
<ul class="navbar-nav">
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
          <div class="col-md-12">
            <div class="card">
            <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
              <div class="card-header">
                <h4 class="card-title"> {{$title}}</h4>
                <div  class="col-md-2" style = "margin-left:85%">
                      <button class="btn btn-primary" onclick="window.location='{{ route("backend.product.add")}}'">Add new</button>
                </div>
         
  
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Code
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Category
                      </th>
                      <th>
                        Sub Category
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                      <tr>
                          <td>
                            {{$product->name}}
                          </td>
                          <td>
                          {{$product->code}}
                          </td>
                          <td>
                          {{$product->selling_price}}
                          </td>
                          <td>
                          {{$product->category->name}}
                          </td>
                          <td>
                          {{$product->sub_category->name}}
                          </td>
                          <!-- <td>
                          @if($product->status == 1){{'Active'}}@else{{'In-active'}}@endif
                          </td> -->
                           <td class="text-right">
                            <a  href="{{route('backend.product.edit',['id' => $product->id])}}"><i data-toggle="tooltip" data-placement="top" title="Edit" class="far fa-edit"></i></a>&nbsp;&nbsp;<a onclick="return confirm('Are you sure to delete this item?')" href = "{{route('backend.product.destroy',['id' => $product->id])}}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection