@extends('layouts.main_app')
@section('mycontent')
    @component('jd3_lte::slots.content_box')
        @slot('title', 'Welcome to Jimbolog')
        @slot('footer', 'That was great wasn\'t it?')
        <h3>There is currently no news. Select an item on the side to get started.</h3>

    @endcomponent
    @component('jd3_lte::slots.callout')

        @slot('calloutType', 'danger')

        @foreach($value as $val)
            {{$val->name}}

        @endforeach

    @endcomponent
@endsection