@extends('user/app')
{{--meta tags--}}
@section('meta')
    <title>{{ $seo->page_title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="{{ $seo->meta_author }}">
    <!-- description -->
    <meta name="title" content="{{ $seo->meta_title }}">
    <meta name="description" content="{{ $seo->meta_description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $seo->meta_keywords }}">
@endsection
{{--end meta tags--}}

@section('additional-css')
    <style>{{ $seo->css }}</style>
@endsection
@section('page')
    @php
        $page = 0
    @endphp
@endsection
@section('main-content')
    <!-- start about agency -->
    <section class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-11 col-xs-12 center-col text-center wow fadeInUp margin-eight-bottom">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Extra special offers</div>
                    <h6 class="font-weight-300 text-extra-dark-gray no-margin-bottom">We believe in affordability and diversity <strong class="font-weight-400">for all our clients</strong> hence we came up with some highly flexible packages that are super cheap. <strong class="font-weight-400">explore them</strong> below.</h6>
                </div>
            </div>
            <div class="row equalize xs-equalize-auto">
                @foreach($offers as $offer)
                <!-- start features box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 sm-margin-four-bottom xs-margin-30px-bottom wow fadeInUp">
                    <div class="bg-white text-center">
                        <a href="{{ route('offer',$offer->slug) }}"><img src="{{ Storage::url($offer->media) }}" alt="{{ $offer->title }}"></a>
                        <div class="padding-45px-all sm-padding-15px-all inner-match-height">
                            <span class="text-extra-dark-gray font-weight-600 display-block alt-font margin-10px-bottom">{!! htmlspecialchars_decode($offer->title) !!}</span>
                            <a href="{{ route('offer',$offer->slug) }}" class="btn btn-small btn-rounded btn-transparent-dark-gray">Explore offer <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end about agency section -->
@endsection

