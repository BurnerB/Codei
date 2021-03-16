@extends('user/app')

{{--meta tags--}}
@section('meta')
    <title>{{ $seo->page_title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
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

    <section class="wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row equalize">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height: 26px;">
                    <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                        <!-- start page title -->
                        <h1 class="alt-font text-white font-weight-600 no-margin-bottom text-uppercase">About codei systems</h1>
                        <!-- end page title -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- start story section -->
    <section class="wow fadeIn animated animated">
        <div class="container">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-5 col-sm-12 col-xs-12 text-center sm-margin-30px-bottom wow fadeInLeft ">
                    <div class="display-table width-100 height-100">
                        <div class="display-table-cell vertical-align-middle width-100 height-100">
                            <img src="{{ asset('about.jpg') }}" alt="" class="border-radius-6 width-100">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="display-table width-100 height-100">
                        <div class="display-table-cell vertical-align-middle padding-twelve-lr sm-text-left sm-no-padding width-100">
                            <span class="text-deep-pink alt-font margin-10px-bottom display-inline-block text-medium">About Codei Systems.</span>
                            <h6 class="alt-font text-extra-dark-gray">We are committed to our customers’ success from start to finish. Our input helps make their solutions.</h6>
                            <p>We are a technology startup who focus on personal attention to each business, whether its small or big, whether the market is small or the brand is already well known in the market. In modern world, customers are not loyal to one brand since they always search for new options. Competition is very high in the market hence. Be it a <strong>Website</strong> for your business, a <strong>Mobile application</strong> for ecommerce or other purpose, <strong>Search engine optimization</strong> making your brand appear in the first page of google and countless other services, our highly skilled and motivated team will work with you as part of your team to make you succeed </p>
                            <a href="{{ url('/#services') }}" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Our Services</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start feature box -->
        </div>
    </section>
    <!-- end story section -->

    <!-- start feature box  -->
    <section class="bg-extra-dark-gray wow fadeIn md-padding-two-lr">
        <div class="container">
            <div class="row">
                <!-- feature box item-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-box-1 xs-margin-30px-bottom wow fadeInRight">
                    <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom alt-font">
                        <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">01.</h3>
                        <span class="text-large line-height-22 padding-20px-left sm-padding-15px width-100 display-table-cell vertical-align-middle">Affordable<br> services.</span>
                    </div>
                    <p class="width-90 md-width-100">We offer high quality work at a fair and reasonable price. We are not the cheapest on the block, but we are far from the most expensive. We believe that any price can be negotiated.</p>
                    <div class="clearfix"></div>
                    <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top"></div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-box-1 xs-margin-30px-bottom  wow fadeInRight" data-wow-delay="0.2s">
                    <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom alt-font">
                        <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">02.</h3>
                        <span class="text-large line-height-22 padding-20px-left width-100 display-table-cell vertical-align-middle">Quick<br> delivery.</span>
                    </div>
                    <p class="width-90 md-width-100">We are extremely fast. We strive to ensure your application, website or service is operational within one month. We like to make sure your business is interrupted for the shortest time</p>
                    <div class="clearfix"></div>
                    <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top"></div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-box-1  wow fadeInRight" data-wow-delay="0.4s">
                    <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom alt-font">
                        <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">03.</h3>
                        <span class="text-large line-height-22 padding-20px-left width-100 display-table-cell vertical-align-middle">Long<br> running support.</span>
                    </div>
                    <p class="width-90 md-width-100">At Codei Systems, we offer extended support for any service that we offer to our clients, get to us anytime in your support period and be sure to get help absolutely free.</p>
                    <div class="clearfix"></div>
                    <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top"></div>
                </div>
                <!-- end feature box item-->
            </div>
        </div>
    </section>
    <!-- end feature box -->

    <!-- start section -->
    <section class="wow fadeIn last-paragraph-no-margin">
        <div class="container">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-4 display-table sm-margin-15px-bottom">
                    <div class="display-table-cell vertical-align-middle">
                        <span class="text-extra-large text-extra-dark-gray alt-font width-90 display-block">We would love to get the chance to work with you in boosting your brand. Contact to inquire about our services</span>
                    </div>
                </div>
                <div class="col-md-4 display-table sm-margin-15px-bottom">
                    <div class="display-table-cell vertical-align-middle">
                        <strong class="font-weight-600 text-extra-dark-gray margin-5px-bottom display-block alt-font">Our approach</strong>
                        <p>We use a data driven approach where we extensively do research on new market trends and technologies so as to be upto date in the digital world.</p>
                    </div>
                </div>
                <div class="col-md-4 display-table">
                    <div class="display-table-cell vertical-align-middle">
                        <strong class="font-weight-600 text-extra-dark-gray margin-5px-bottom display-block alt-font">Our Mission</strong>
                        <p>To be a major team player in cutting edge technology and solutions. We would love a rapidly expanding client base whose brand grows with our input</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="parallax wow fadeIn" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('bg.jpg') }}); visibility: visible; animation-name: fadeIn;">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-30px-bottom xs-margin-40px-bottom">
                    <div class="position-relative overflow-hidden width-100">
                        <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-white">What some of our clients say</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-slider-second swiper-container white-move swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                        @foreach($testimonials as $testimonial)
                            <!-- start testimonial item -->
                                <div class="swiper-slide swiper-slide-active" style="width: 440px;">
                                    <div class="col-md-7 col-sm-10 col-xs-12 center-col equalize sm-equalize-auto last-paragraph-no-margin">
                                        <div class="col-md-3 col-sm-3 col-xs-12 display-table" style="">
                                            <div class="display-table-cell vertical-align-middle">
                                                <img src="{{ Storage::url($testimonial->avatar) }}" alt="" class="border-radius-100 width-150px xs-width-100px xs-margin-15px-bottom" data-no-retina="">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 text-left xs-text-center margin-20px-left xs-no-margin-left display-table" style="">
                                            <div class="display-table-cell vertical-align-middle">
                                                <p class="text-extra-light-gray margin-15px-bottom">{{ $testimonial->content }}</p>
                                                <span class="text-white alt-font text-uppercase text-small margin-15px-top display-inline-block">- {{ $testimonial->name }} <br><small>{{ $testimonial->role }}</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end testimonial item -->
                        @endforeach


                    </div>
                    <div class="swiper-button-next slider-long-arrow-white"></div>
                    <div class="swiper-button-prev slider-long-arrow-white swiper-button-disabled"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- start team section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">we believe in business growth</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">Talent wins games, but teamwork and intelligence wins championships</h5>
                </div>
            </div>
            <div class="row">

                @foreach($members as $member)
                    <!-- start team item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 team-block text-left team-style-1 sm-margin-seven-bottom xs-margin-30px-bottom wow fadeInRight" data-wow-duration="900ms">
                            <figure>
                                <div class="team-image xs-width-100">
                                    <img src="{{ Storage::url($member->image) }}" alt="">
                                    <div class="overlay-content text-center">
                                        <div class="display-table height-100 width-100">
                                            <div class="vertical-align-bottom display-table-cell icon-social-small padding-twelve-all">
                                                <span class="text-white text-small display-inline-block no-margin">{{ $member->short_description }}</span>
                                                <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                                <a href="{{ $member->website }}" class="text-white" target="_blank"><i class="fab fa-globe"></i></a>
                                                <a href="{{ $member->linkedin }}" class="text-white" target="_blank"><i class="fab fa-linkedin"></i></a>
                                                <a href="{{ $member->facebook }}" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                                </div>
                                <figcaption>
                                    <div class="team-member-position margin-20px-top text-center">
                                        <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">{{ $member->name }}</div>
                                        <div class="text-extra-small text-uppercase text-medium-gray">{{ $member->role }}</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end team item -->
                @endforeach


            </div>
        </div>
    </section>
    <!-- end team section -->



@endsection
