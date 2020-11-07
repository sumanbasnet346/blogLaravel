@extends('front/layout/layout')
@section('title')
    {{$result[0]->name}}
@endsection

@section('post_image')
<header class="masthead" style="background-image:url('{{asset('front_asset/img/home-bg.jpg')}}')">
@endsection

@section('post_title')

<h3><b>{{$result[0]->name}}</b><h3>

@endsection

@section('container')

<p>{{$result[0]->description}}</p>
    
@endsection