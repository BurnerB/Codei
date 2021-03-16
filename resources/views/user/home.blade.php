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
        $page = 1
    @endphp
@endsection
@section('main-content')

    <!-- start slider section -->
    <section class="wow fadeIn example no-padding no-transition">
        <article class="content">
            <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- start revolution slider 5.4.1 fullwidth mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul><!-- slide  -->

                        @php
                         $i = 0;
                        @endphp

                        @foreach($banners as $banner)
                            @php
                                $i++;
                            @endphp
                            <!-- slide  -->
                                <li data-index="@if($i == 1) rs-3045 @else rs-{{ $i }} @endif" data-transition="fade" data-slotamount="@if($i == 1) default @else 3 @endif" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="@if($i == 1) Power4.easeInOut @else default @endif" data-easeout="@if($i == 1) Power4.easeInOut @else default @endif" data-masterspeed="@if($i == 1) 200 @else 500 @endif"  data-thumb="{{ Storage::url($banner->media) }}"  data-rotate="0"  @if($i==1) data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="0" @endif data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                                    <!-- main image -->
                                    <img src="{{ Storage::url($banner->media) }}"  alt="slider-{{ $i }}"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
                                    <!-- layer nr. 3 -->
                                    <div class="tp-caption NotGeneric-Title tp-resizeme"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']"
                                         data-fontsize="['12','12','12','12']"
                                         data-lineheight="['20','20','20','20']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[10,10,10,10]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[10,10,10,10]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">
                                        {{ $banner->short_title }}
                                    </div>
                                    <!-- layer nr. 4 -->
                                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme "
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-fontsize="['70','70','60','50']"
                                         data-lineheight="['75','75','60','60']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[10,10,10,10]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[10,10,10,10]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">{!! htmlspecialchars_decode($banner->title) !!}</div>

                                    <!-- layer nr. 5 -->
                                    <a href="{{ $banner->btn_link }}" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5"
                                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                       data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']"
                                       data-fontsize="['12','14','14','14']"
                                       data-whitespace="nowrap"
                                       data-visibility="['on', 'on', 'on', 'on']"
                                       data-type="text"
                                       data-color="['#FFFFFF']"
                                       data-responsive_offset="on"
                                       data-responsive="on"
                                       data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                       data-textAlign="['inherit', 'inherit', 'right', 'center']"
                                       data-paddingtop="[6,6,6,6]"
                                       data-paddingright="[26,26,26,26]"
                                       data-paddingbottom="[6,6,6,6]"
                                       data-paddingleft="[26,26,26,26]"
                                       data-basealign="slide">{{ $banner->btn_text }}</a>
                                    <!-- LAYER NR. 6 -->
                                </li>
                                <!-- slide  -->
                        @endforeach


                    </ul>
                </div>
            </div>
            <!-- end revolution slider -->
        </article>
    </section>
    <!-- end slider section -->


    <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;" id="services">
        <div class="container">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-5 col-sm-11 col-xs-12 sm-center-col padding-five-right sm-margin-70px-bottom sm-text-center sm-padding-15px-lr xs-margin-50px-bottom wow fadeIn xs-text-left" style="visibility: visible; animation-name: fadeIn;">
                    <p class="alt-font text-deep-pink margin-10px-bottom">What we are, what we do and how we do it</p>
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray"><span>Codei Systems</span> is a digital marketing, software development and web design tech agency in Kenya . </h5>
                    <p>
                        We are a full-service software development and digital marketing agency that creates campaigns to make your brand succeed. Our data and customer first driven approach ensures that your brand trully stands out in the greatly diverse and crowded marketplace, at CODEI SYSTEMS, we would preffer to be part of your team rather than just your vendor so as to align ourselves with you mission and vision to transform your organization
                    </p>
                    <a class="btn btn-dark-gray btn-small" href="{{ url('about') }}" target="_blank">More about us</a>
                </div>
                <div class="col-md-7 col-xs-12 sm-no-padding-lr" style="">
                    <div class="padding-seven-lr pull-left sm-no-padding-lr col-2-nth">
                    @php $i = 0 @endphp
                    @foreach($services as $service)
                        @php $i++ @endphp
                        <!-- start feature box -->
                            <div class="col-md-6 margin-30px-top xs-margin-five-bottom wow fadeInRight sm-margin-30px-bottom last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="icon-box width-100 sm-margin-lr-auto xs-width-100 margin-15px-bottom">
                                    <div class="icon-box-holder vertical-align-middle display-table-cell position-relative height-auto last-paragraph-no-margin">
                                        <i class="{{ $service->icon }} icon-medium text-deep-pink padding-5px-top"></i>
                                        <span class="alt-font text-medium-gray text-small">00{{$i}}</span>
                                        <p class="text-extra-dark-gray alt-font font-weight-600">
                                            <a href="{{ route('service',$service->slug) }}">{{ $service->name }}</a>
                                        </p>
                                    </div>
                                </div>
                                <p class="width-100 sm-width-100">{{ $service->short_description }}</p>
                            </div>
                            <!-- end feature box -->
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="parallax" data-stellar-background-ratio="0.6" style="background-image: url({{ asset('offer.jpg') }});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container-fluid position-relative">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 col-sm-12 col-xs-12 display-table sm-margin-50px-bottom xs-margin-30px-bottom wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <img src="{{ Storage::url($offer->media) }}" alt="" class="width-100" data-no-retina="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 display-table wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="display-table-cell vertical-align-middle">
                        <div class="width-75 md-width-100 padding-three-lr xs-no-padding-lr xs-no-padding-bottom">
                            <h4 class="alt-font text-white font-weight-600">{{ $offer->title }}</h4>
                            {!! htmlspecialchars_decode($offer->short_description) !!}
                            <a href="{{ route('offer',$offer->slug) }}" class="btn btn-white btn-small text-extra-small border-radius-4 margin-20px-tb sm-no-margin-bottom"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i>CHECK OFFER</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="creative" class="wow fadeIn" style="background: url({{ asset('testimonial-bg.png') }}); visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-md-8 text-left text-lg-left md-margin-40px-bottom sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin" style="visibility: visible; animation-name: fadeIn;">
                    <p class="alt-font font-weight-600 text-small text-uppercase text-deep-pink margin-10px-bottom">Featured client case studies</p>
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray width-95 md-width-100 sm-margin-15px-bottom">Some kind words from our clients regarding service offered.</h5>
                    <p class="width-85 md-width-100">We have interacted with clients most of whom have kind words or two. Here are a couple featured ones</p>
                    <a class="btn btn-dark-gray btn-small margin-30px-top md-margin-20px-top sm-margin-15px-top" href="{{ url('contact_us') }}">Hire us</a>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row blog-post">
                        @foreach($case_studies as $case_study)
                            <!-- start blog post item -->
                                <div class="col-12 col-md-6 wow fadeIn text-left sm-margin-30px-bottom last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                    <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                                        <a href="{{ route('case-study',$case_study->slug) }}">
                                            <img src="{{ Storage::url($case_study->media) }}" alt="" data-no-retina="">
                                        </a>
                                    </div>
                                    <div class="separator-line-verticle-small-thick bg-deep-pink d-none d-md-inline-block align-top margin-two-half-top margin-four-right"></div>
                                    <div class="post-details width-90 d-inline-block sm-width-100 text-left text-md-left">
                                        <span class="alt-font margin-5px-bottom d-block text-extra-dark-gray font-weight-600"><a
                                                href="{{ route('case-study',$case_study->slug) }}"><b>{{ $case_study->title }}</b></a></span>
                                        <p>{{ $case_study->short_description }}</p>
                                    </div>
                                </div>
                                <!-- end blog post item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray xs-no-padding-tb wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-5 col-sm-12 sm-text-center col-md-offset-1 sm-padding-50px-all xs-padding-15px-lr pull-right" style="">
                    <div class="display-table width-100 height-100">
                        <div class="display-table-cell vertical-align-middle">
                            <i class="fas fa-quote-left text-deep-pink icon-medium margin-15px-bottom"></i>
                            <h5 class="text-extra-dark-gray alt-font font-weight-600">{{ $quote }}</h5>

                            <span class="text-extra-dark-gray text-large display-block margin-30px-top alt-font font-weight-600">Random quotes</span>
                            <span class="display-block">Artisan inspire</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-offset-md-1 col-sm-12 col-xs-12 xs-no-padding text-center position-relative" style="">
                    <div class="position-absolute background-position-left height-100 width-100 xs-display-none" style="background-image: url({{ asset('braille.jpg') }}); background-repeat: no-repeat"></div>
                    <div class="bg-extra-dark-gray padding-55px-all md-padding-35px-all text-left width-70 sm-width-60 xs-width-100 float-right last-paragraph-no-margin position-relative md-top-10 sm-top-15 xs-top-10 z-index-1">
                        <div class="text-medium margin-25px-bottom text-white">Do what you can, leave the digital aspect to us.</div>
                        <p>Ok ok ok, we admit it, we are geeks who are over obsessive with technology but the advantage is that our clients don't need to be. Most are too busy doing much more important things than code, optimize a site or install operating systems and dull antivirus software.</p>
                        <p>We take care of this for them so they can focus on what they do best.</p>
                        <a href="{{ url('about_us') }}" class="inner-link text-uppercase alt-font margin-25px-top display-inline-block font-weight-600 text-white text-small">More about us<i class="fas fa-long-arrow-alt-right margin-10px-left text-deep-pink position-relative" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Latest posts</h5>
                    <p class="margin-lr-auto">A collection of tutorials, articles and updates from the tech world.</p>
                </div>
            </div>
            <div class="row equalize xs-equalize-auto">
                @foreach($featured as $post)
                    <!-- start blog post item -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 md-margin-four-bottom sm-margin-50px-bottom xs-margin-30px-bottom wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-post blog-post-style2">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom xs-margin-15px-bottom">
                                    <a href="{{ route('post',$post->slug) }}">
                                        <img src="{{ Storage::url($post->image) }}" alt="" data-no-retina="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <a href="{{ route('post',$post->slug) }}" class="post-title text-medium text-extra-dark-gray width-90 display-block md-width-100">{{ $post->title }}</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <div class="author">
                                        <img src="{{ Storage::url($post->avatar) }}" alt="" class="border-radius-100">
                                        <span class="text-medium-gray text-uppercase text-extra-small padding-15px-left display-inline-block">by <a class="text-medium-gray">{{ $post->name }}</a>&nbsp;&nbsp;|&nbsp;&nbsp;{{ $post->created_at->toFormattedDateString() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                @endforeach
            </div>
        </div>
    </section>
@endsection
