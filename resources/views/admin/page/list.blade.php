@extends('admin/layout/layout')
@section('title')
Page-List
@endsection
@section('container')

<div class="page-title">
  <div class="title_left">
    
    
    <h3>Page</h3>
    <h5><a href="{{url('/admin/page/add')}}">Add a Page</h5>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      
    </div>
  </div>
</div>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <h3 style="color:green;text-align:center">{{session('post')}}</h3>
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                  @foreach ($result as $list)
                  <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->name}}</td>
                    <td>{{$list->slug}}</td>
                    <td style="align-items: center">
                        <a href="{{url('/admin/page/edit/'.$list->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{url('/admin/page/delete/'.$list->id)}}" class="btn btn-danger">Delete</a>
                         
                       
                      
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

 
</div>
@endsection