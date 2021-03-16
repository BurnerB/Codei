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
    <!-- start recent work section -->
    <section class="bg-light-gray wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Some sample works</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">Stunning projects done for our amazing clients</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 no-padding xs-padding-15px-lr">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col gutter-large hover-option6 lightbox-portfolio">
                            <li class="grid-sizer"></li>
                            @foreach($portfolios as $portfolio)
                            <!-- start portfolio item -->
                            <li class="grid-item wow zoomIn last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="{{ Storage::url($portfolio->media) }}" alt="{{ $portfolio->title }}"/>
                                        <div class="portfolio-icon">
                                            <a href="{{ $portfolio->link }}" target="_blank"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="Lightbox gallery image title..." href="{{ Storage::url($portfolio->media) }}"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="{{ $portfolio->link }}"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block">{{ $portfolio->title }}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end recent work section -->



@endsection


