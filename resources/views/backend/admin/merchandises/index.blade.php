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
  List {{$title}}
@endsection
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.merchandise.add")}}">
                  Add Merchandise
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
                      <button class="btn btn-primary" onclick="window.location='{{ route("backend.merchandise.add")}}'">Add new</button>
                </div>
         
  
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Slug
                      </th>
                      <th>
                        Website Link
                      </th>
                      <th>
                        Status
                      </th>
                      
                      
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($merchandises as $merchandise)
                      <tr>
                          <td>
                            {{$merchandise->name}}
                          </td>
                          <td>
                          {{$merchandise->slug}}
                          </td>
                          <td>
                          {{$merchandise->website_link ?? 'N/A'}}
                          </td>
                          <td>
                          @if($merchandise->status == 1){{'Active'}}@else{{'In-active'}}@endif
                          </td>
                          
                          
                          <td class="text-right">
                            <a  href="{{route('backend.merchandise.edit',['id' => $merchandise->id])}}"><i data-toggle="tooltip" data-placement="top" title="Edit" class="far fa-edit"></i></a>&nbsp;&nbsp;<a onclick="return confirm('Are you sure to delete this item?')" href = "{{route('backend.merchandise.destroy',['id' => $merchandise->id])}}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="far fa-trash-alt"></i></a>
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

