@extends('jd3_lte::layouts.backend_app')
@section('image_uri','https://upload.wikimedia.org/wikipedia/commons/b/b1/James_Allen.jpg') 
@section('main_footer')
    <strong>Copyright 2017 Jimbolog</strong> All Rights Reserved
@endsection 
@section('right_footer','') 
@section('profile_link','/home') 
@section('content_header', '') 
@section('content_sub_header', '') 
@section('content')
    @include('jd3_lte::partials.backend_register')
@endsection
@section('left-sidebar')
    
@endsection