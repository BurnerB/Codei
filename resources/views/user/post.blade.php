@extends('user/app')
{{--meta tags--}}
@section('meta')
    <title>{{ $post->title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="{{ $post->meta_author }}">
    <!-- description -->
    <meta name="title" content="{{ $post->meta_title }}">
    <meta name="description" content="{{ $post->meta_description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $post->meta_keywords }}">

@endsection
{{--end meta tags--}}

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('user/css/prism.css')}}"/>
@endsection

@section('page')
    @php
        $page = 1
    @endphp
@endsection
@section('main-content')
@section('facebook-comments')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=277480706746819&autoLogAppEvents=1"></script>
@endsection

<!-- start page title section -->
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"
         style="background-image:url({{ Storage::url($post->image) }});">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 one-second-screen display-table page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="text-white alt-font font-weight-600 margin-10px-bottom">{{ $post->title }}</h1>
                    <!-- end page title -->
                    <!-- start sub title -->
                    <span class="text-white opacity6 alt-font no-margin-bottom text-uppercase text-small">{{ $post->created_at->toFormattedDateString() }}&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;by <a
                            class="text-white">{{ $user->name }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        @foreach($post->categories as $category)
                            <a href="{{ route('category',$category->slug) }}"
                               class="text-white">{{  $category->name }}</a>
                            @if( !$loop->last)
                                ,
                            @endif
                        @endforeach
                    </span>
                    <!-- end sub title -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->


<!-- start section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8 center-col last-paragraph-no-margin xs-text-left">

                {!! htmlspecialchars_decode($post->body) !!}

                <div class="col-md-6 col-sm-6 col-xs-12 xs-text-left text-left margin-40px-top">
                    <div class="fb-like" data-href="{{ Request::url() }}" data-width="" data-layout="standard"
                         data-action="like" data-size="large" data-share="true"></div>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12 text-left xs-text-left xs-margin-10px-bottom margin-40px-top">
                    <div class="tag-cloud">
                        @foreach($post->tags as $tag)
                            <a href="{{ route('tag',$tag->slug) }}">{{  $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start blog post section -->
<section class="wow fadeIn no-padding-top xs-margin-50" style="margin-top:-80px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12 center-col margin-20px-top sm-margin-30px-top wow fadeInUp">
                <div
                    class="display-table width-100 border-all border-color-extra-light-gray padding-50px-all sm-padding-30px-all xs-padding-20px-all">
                    <div
                        class="display-table-cell width-130px text-center vertical-align-top xs-margin-15px-bottom xs-width-100 xs-display-block xs-text-center">
                        <img src="{{ Storage::url($user->avatar) }}" class="img-circle width-100px" alt=""/>
                    </div>
                    <div
                        class="padding-40px-left display-table-cell vertical-align-top last-paragraph-no-margin xs-no-padding-left xs-display-block xs-text-center">
                        <a href="#"
                           class="text-extra-dark-gray text-uppercase alt-font font-weight-600  display-inline-block text-small">{{ $user->name }}</a>
                        <p>{{ $user->bio }}</p>
                          </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end blog post section -->

{{--comments--}}

<!-- start section -->
<section style="margin-top:-20px;" class="fadeIn no-margin-top no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 center-col xs-text-center">

                <div class="fb-comments col-md-12" data-href="{{ Request::url() }}" data-numposts="5"
                     data-width=""></div>

            </div>
        </div>
    </div>
</section>
<!-- end section -->

{{--end comments--}}
@section('additional-js')
    <script type="text/javascript" src="{{ asset('user/js/prism.js')}}"></script>
@endsection
@endsection
