@extends('admin/layout/layout')
@section('title')
Post-Edit
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
                <form class="form-horizontal form-label-left" method="POST" action="{{url('/admin/post/update/'.$result[0]->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="title" value="{{$result[0]->title}}" name="title" 
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
                        <input type="text" id="slug" value="{{$result[0]->slug}}" name="slug" 
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
                            <textarea name="short_desc"
                                class="form-control" cols="30" rows="5">{{$result[0]->short_desc}}</textarea>
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
                            <textarea name="long_desc"
                                class="form-control" cols="30" rows="5">{{$result[0]->long_desc}}</textarea>
                                @error('Main Desc')
                                <span class="field_error"> {{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image
                        </label>
                    <img src="{{asset('/storage/post/'.$result[0]->image)}}" alt style="width:50px;height:50px">
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
                            <input type="date" name="post_date" value="{{$result[0]->post_date}}" class="form-control ">
                            @error('Post Date')
                            <span class="field_error"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection