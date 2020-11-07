@extends('front/layout/layout')
@section('title')
    Post-{{$result[0]->title}}
@endsection

@section('post_image')
<header class="masthead" style="background-image:url('{{asset('storage/post/'.$result[0]->image)}}')">
@endsection

@section('post_title')
    <p><h3><b>{{$result[0]->title}}</b></h3></p>
@endsection

@section('container')
<p>{{$result[0]->short_desc}}</p>
<hr>
<p>{{$result[0]->long_desc}}</p>
    
@endsection