@extends('layouts.app')

@section('content')
    @include('partials.special_feature')
    @include('partials.about_us')
    @include('partials.cool_facts')
    @include('partials.services')
{{--    @include('partials.works')--}}
    @include('partials.advisor')
    @include('partials.cta')
    @include('partials.prices')
    @include('partials.testimonial')
    {{--@include('partials.partners')--}}
    {{--@include('partials.cta2')--}}
    @include('partials.contact')
@endsection
