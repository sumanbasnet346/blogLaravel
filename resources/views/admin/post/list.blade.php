@extends('admin/layout/layout')
@section('title')
Post-List
@endsection
@section('container')

<div class="page-title">
  <div class="title_left">
    
    
    <h3>Post</h3>
    <h5><a href="/admin/post/add">Add a post</h5>
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
                    <th width="2%">S.N.</th>
                    <th width="10%">Title</th>
                    <th width="18%">Short Desc.</th>
                    <th width="20%" >Date</th>
                    <th width="30%">Image</th>
                    <th width="20%">Action</th>
                  </tr>
                </thead>


                <tbody>
                  @foreach ($result as $list)
                  <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->title}}</td>
                    <td>{{$list->short_desc}}</td>
                    <td>{{$list->added_on}}</td>
                  <td><img src="{{asset('storage/post/'.$list->image)}}" alt style="width:100px;height:auto" /></td>
                    <td style="align-items: center">
                        <a href="{{url('/admin/post/edit/'.$list->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{url('/admin/post/delete/'.$list->id)}}" class="btn btn-danger">Delete</a>
                         
                       
                      </div>
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