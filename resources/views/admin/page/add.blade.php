@extends('admin/layout/layout')
@section('title')
Page-Add
@endsection
@section('container')
<div class="page-title">
    <div class="title_left">
        <h3>Manage Page</h3>
    </div>
    <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">

            <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" method="POST" action="{{url('/admin/page/submit')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name<span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" placeholder="Name" name="name" 
                                class="form-control ">
                                @error('name')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">                  Slug<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="slug" placeholder="Slug" 
                                class="form-control"></textarea>
                                @error('Slug')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea name="description" placeholder="Description" 
                                class="form-control" cols="30" rows="5"></textarea>
                                @error('Description')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                  
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="added_on">Added on
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="date" name="added_on"  class="form-control ">
                            @error('Added on')
                            <span class="field_error"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection