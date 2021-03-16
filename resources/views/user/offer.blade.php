@extends('user/app')

{{--meta tags--}}
@section('meta')
    <title>CODEI SYSTEMS | {{ $offer->title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="{{ $offer->meta_author }}">
    <!-- description -->
    <meta name="title" content="{{ $offer->meta_title }}">
    <meta name="description" content="{{ $offer->meta_description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $offer->meta_keywords }}">

@endsection
{{--end meta tags--}}

{{--additional css--}}
@section('additional-css')
    <style>
        {{--        {{ $seo->css }}--}}
    </style>
@endsection
{{--end additional css--}}
@section('page')
    @php
        $page = 0
    @endphp
@endsection
@section('main-content')
    <section class="cover-background no-padding-bottom xs-padding-50px-bottom wow fadeIn" style="background: url({{ asset('service.jpg') }}); visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7 col-sm-11 col-xs-12 text-center center-col">
                    <h4 class="alt-font text-white center-col margin-lr-auto xs-width-100 xs-margin-15px-bottom">{{ $offer->title }}</h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center center-col height-650px overflow-hidden md-height-auto md-bottom--minus50 md-position-relative wow fadeIn xs-bottom-0" style="visibility: visible; animation-name: fadeIn;">
                    <img src="{{ Storage::url($offer->media) }}" alt="{{ $offer->title }}" data-no-retina="">
                </div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 center-col last-paragraph-no-margin xs-text-left">

                    {!! htmlspecialchars_decode($offer->description) !!}

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
