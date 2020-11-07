@extends('admin/layout/layout')
@section('title')
Contact-List
@endsection
@section('container')

<div class="page-title">
  <div class="title_left">
    
    
    <h3>Contact List</h3>
    
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
             
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th >S.N.</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Mobile</th>
                    <th >Message</th>
                    <th >Added On</th>
                  </tr>
                </thead>


                <tbody>
                  @foreach ($result as $list)
                  <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->name}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->mobile}}</td>
                    <td>{{$list->message}}</td>
                    <td>{{$list->added_on}}</td>
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