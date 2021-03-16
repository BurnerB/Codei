@extends('user/app')
{{--meta tags--}}
@section('meta')
    <title>{{ $seo->page_title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="{{ $seo->author }}">
    <!-- description -->
    <meta name="title" content="{{ $seo->title }}">
    <meta name="description" content="{{ $seo->description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $seo->keywords }}">
    <meta name="language" content="{{ $seo->language }}">
    <meta name="revisit-after" content="{{ $seo->revisit_after }}">
@endsection
{{--end meta tags--}}

{{--additional css--}}
@section('additional-css')
    <link rel="stylesheet" href="{{ asset('user/css/prism.css')}}"/>
    <style>
        {{ $seo->css }}
    </style>
@endsection
{{--end additional css--}}

@section('page')
    @php
        $page = 0
    @endphp
@endsection
@section('main-content')

    <!-- start page title section -->
    <section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
        <div class="container">
            <div class="row equalize xs-equalize-auto">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
                    <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                        <!-- start page title -->
                        <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">{{ $tag->name }}</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->


    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <main
                    class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
                    <div class="col-2-nth">
                    @foreach($posts as $post)

                        <!-- start blog post item -->
                            <div style="margin-bottom:50px;"
                                 class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom">
                                <div class="blog-post blog-post-style1 xs-text-center">
                                    <div
                                        class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                        <a href="{{ route('post',$post->slug) }}">
                                            <img src="{{ Storage::url($post->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details text-left">
                                        <span
                                            class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">{{ $post->created_at->toFormattedDateString() }} | by <a
                                                href="blog-masonry.html" class="text-medium-gray">{{ $post->name }}</a></span>
                                        <a href="{{ route('post',$post->slug) }}"
                                           class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">{{ $post->title }}</a>
                                        <div
                                            class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                        <p class="width-90 xs-width-100">{{ $post->subtitle }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end blog post item -->
                        @endforeach

                    </div>
                    <!-- start slider pagination -->
                    <div
                        class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top wow fadeInUp">
                        <div class="pagination text-small text-uppercase text-extra-dark-gray">
                            <ul>
                                {{ $posts->links() }}
                            </ul>
                        </div>
                    </div>
                    <!-- end slider pagination -->
                </main>
                <!-- start right sidebar  -->
                <aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
                    <div class="display-inline-block width-100 margin-45px-bottom xs-margin-25px-bottom">
                        <form method="get" action="{{ route('search') }}">
                            <div class="position-relative">
                                <input type="text"
                                       class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left"
                                       placeholder="Enter your keywords..." name="keywords">
                                <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i
                                        class="fas fa-search no-margin-left"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="margin-50px-bottom">
                        <div
                            class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
                            <span>Follow Us</span></div>
                        <div class="social-icon-style-1 text-center">
                            <ul class="extra-small-icon">
                                <li><a class="facebook" href="{{ $facebook->value }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a class="linkedin" href="{{ $linkedin->value }}" target="_blank"><i
                                            class="fab fa-linkedin"></i></a></li>
                                <li><a class="github" href="{{ $github->value }}" target="_blank"><i
                                            class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div
                            class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
                            <span>Categories</span></div>
                        <ul class="list-style-6 margin-50px-bottom text-small">
                            @foreach($categories as $category)
                                <li><a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div
                            class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
                            <span>tags cloud</span></div>
                        <div class="tag-cloud">
                            @foreach($tags as $tag)
                                <a href="{{ route('tag',$tag->slug) }}">{{  $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>

                </aside>
                <!-- end right sidebar -->
            </div>
        </div>
    </section>

@endsection
