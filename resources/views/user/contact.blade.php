@extends('user/app')

{{--meta tags--}}
@section('meta')
    <title>CODEI SYSTEMS | {{ $seo->title }}</title>
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

{{--additional css--}}
@section('additional-css')
    <style>
        {{--        {{ $seo->css }}--}}
    </style>
@endsection
{{--end additional css--}}
@section('page')
    @php
        $page = 1
    @endphp
@endsection
@section('main-content')

    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"
             style="background-image:url('{{ asset('service.jpg') }}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">
                            Contact us</h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white opacity6 alt-font">Give us a call, send us an email, chat on WhatsApp, send us an SMS message and even message us  <br>on social media. We would love to communicate with you</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->

    <!-- start contact info -->
    <section class="wow fadeIn">
        <div class="container">

            <div class="row">
                <div class="row">
                    <!-- start contact info item -->
                    @include('includes.messages')
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i
                                    class="icon-map-pin icon-medium text-white"></i></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                            Visit Our Office
                        </div>
                        <p class="center-col">{{ $address->value }}</p>
                        <a href="{{ $map->value }}" target="_blank"
                           class=" text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">GET
                            DIRECTION</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin"
                        data-wow-delay="0.2s">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i
                                    class="icon-chat icon-medium text-white"></i></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                            Let's Talk
                        </div>
                        <p class="center-col">Phone: {{ $mobile->value }}</p>
                        <a href="tel:{{ $mobile->value }}"
                           class=" text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">call
                            us</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin"
                        data-wow-delay="0.4s">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i
                                    class="icon-envelope icon-medium text-white"></i></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                            E-mail Us
                        </div>
                        <p class="center-col"><a href="mailto:{{ $email->value }}">{{ $email->value }}</a><br>
                            <a href="mailto:{{ $email->value }}"
                               class=" text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">send
                                e-mail</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin"
                        data-wow-delay="0.2s">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i
                                    class="icon-mobile icon-medium text-white"></i></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                            Whatsapp
                        </div>
                        <p class="center-col">Number: {{ $whatsapp->value }}</p>
                        <a target="_blank" href="https://wa.me/{{ $whatsapp->value }}"
                           class=" text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">Text
                            us</a>
                    </div>
                    <!-- end contact info item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end contact info section -->
    <!-- start contact form -->
    <section id="contact" class="wow fadeIn no-padding bg-extra-dark-gray">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 cover-background sm-height-450px xs-height-350px wow fadeIn"
                     style="background: url({{ asset('map.png') }})"></div>
                <div class="col-md-6 wow fadeIn">
                    <div class="padding-eleven-all text-center xs-no-padding-lr">
                        <div
                            class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom xs-margin-three-bottom">
                            Fill out the form and we'll be in touch soon!
                        </div>
                        <h5 class="margin-55px-bottom text-white alt-font font-weight-700 text-uppercase xs-margin-ten-bottom">
                            Ready to request a quote?</h5>
                        <form id="project-contact-form" action="{{ route('enquiry.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="success-project-contact-form" class="no-margin-lr"></div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" placeholder="Your names"
                                           class="bg-transparent border-color-medium-dark-gray medium-input" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="mobile" id="phone" placeholder="Phone number"
                                           class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="E-mail *"
                                           class="bg-transparent border-color-medium-dark-gray medium-input" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" id="subject" placeholder="Subject"
                                           class="bg-transparent border-color-medium-dark-gray medium-input" required="required">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="comment" placeholder="Enter your message" rows="6"
                                              class="bg-transparent border-color-medium-dark-gray medium-textarea" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button id="project-contact-us-button" type="submit"
                                            class="btn btn-deep-pink btn-medium margin-20px-top">send message
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact form -->

@endsection
