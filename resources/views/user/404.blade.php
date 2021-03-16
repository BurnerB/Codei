@extends('user/app')

{{--meta tags--}}
@section('meta')
    <title>404 not found</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>


@endsection
{{--end meta tags--}}

{{--additional css--}}
@section('additional-css')
    <style>
{{--       {{ $custom_css->value }}--}}
    </style>
@endsection
{{--end additional css--}}
@section('page')
    @php
        $page = 1
    @endphp
@endsection
@section('main-content')

    <!-- start page not found section -->
    <section id="home" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url({{ asset('parallax-bg31.jpg') }});">
        <div class="opacity-full bg-extra-dark-gray"></div>
        <div class="container position-relative full-screen">
            <div class="slider-typography text-center">
                <div class="slider-text-middle-main">
                    <div class="slider-text-middle">
                        <div class="bg-black-opacity-light width-50 center-col sm-width-80">
                            <div class="padding-fifteen-all xs-padding-20px-all">
                                <span class="title-extra-large text-white font-weight-600 display-block margin-30px-bottom xs-margin-10px-bottom">404!</span>
                                <h6 class="text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom">Resource Not Found</h6>
                                <span class="text-medium-gray width-60 display-block center-col text-large sm-width-100">The Resource you were looking for could not be found.</span>
                                <form action="{{ route('search') }}" method="get" class="position-relative">
                                    <div class="input-group-404 input-group margin-50px-tb xs-margin-20px-tb">
                                        <input name="keywords" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="extra-big-input border-none" />
                                        <div class="input-group-btn">
                                            <button type="submit" name="submit" class="btn btn-large bg-white text-medium-gray"><i class="ti-search icon-small  no-margin position-raltive top-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <a href="{{ url('/') }}" class="btn btn-transparent-white btn-medium text-extra-small border-radius-4"><i class="ti-arrow-left margin-5px-right no-margin-left" aria-hidden="true"></i> Back To Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page not found section -->

@endsection

