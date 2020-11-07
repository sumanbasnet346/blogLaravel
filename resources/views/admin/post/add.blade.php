@extends('admin/layout/layout')
@section('title')
Post-Add
@endsection
@section('container')
<div class="page-title">
    <div class="title_left">
        <h3>Manage Post</h3>
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
                <form class="form-horizontal form-label-left" method="POST" action="{{url('/admin/post/submit')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="title" placeholder="Title" name="title" 
                                class="form-control ">
                                @error('title')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug<span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="slug" placeholder="Slug should be unique." name="slug" 
                                class="form-control ">
                                @error('slug')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="short_desc">Short
                            description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea name="short_desc" placeholder="Short Description" 
                                class="form-control" cols="30" rows="5"></textarea>
                                @error('Short Desc')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="main_desc">Main
                            description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea name="long_desc" placeholder="Main Description" 
                                class="form-control" cols="30" rows="5"></textarea>
                                @error('Main Desc')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" name="image">
                            @error('image')
                            <span class="field_error"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Post Date
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="date" name="post_date"  class="form-control ">
                            @error('Post Date')
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