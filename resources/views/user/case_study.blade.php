@extends('user/app')

{{--meta tags--}}
@section('meta')
    <title>CODEI SYSTEMS | Case study</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

@endsection
{{--end meta tags--}}

{{--additional css--}}
@section('additional-css')
    <style>
        {{ $custom_css->value }}
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
                        <h1 class="alt-font text-white font-weight-600 no-margin-bottom text-uppercase">{{ $case_study->title }}</h1>
                        <!-- end page title -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- start section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 center-col last-paragraph-no-margin xs-text-left">

                    {!! htmlspecialchars_decode($case_study->description) !!}

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



@endsection

