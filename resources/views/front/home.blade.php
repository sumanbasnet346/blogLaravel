@extends('front/layout/layout')
@section('title')
    Welcome - Home
@endsection

@section('post_image')
<header class="masthead" style="background-image:url('{{asset('front_asset/img/home-bg.jpg')}}')">
@endsection

@section('post_title')

<h3><b>Welcome</b><h3>

@endsection

@section('container')
@foreach ($result as $item)
<div class="post-preview">
<a href="{{url('post/'.$item->slug)}}">
      <h2 class="post-title">
       {{$item->title}}
      </h2>
      <h3 class="post-subtitle">
       {{$item->short_desc}}
      </h3>
    </a>
<p class="post-meta">Posted on {{$item->post_date}}</p>
  </div>
  <hr>
@endforeach
    
    <!-- Pager -->
    <div class="clearfix">
      <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
    
@endsection