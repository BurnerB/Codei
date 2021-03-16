@extends('user/app')
{{--meta tags--}}
@section('meta')
    <title>CODEI SYSTEMS - File download</title>
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

    <section class="wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row equalize">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height: 26px;">
                    <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                        <!-- start page title -->
                        <h1 class="alt-font text-white font-weight-600 no-margin-bottom text-uppercase">Download file/s</h1>
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
                <h5 class="font-weight-600 text-extra-dark-gray alt-font">{{ $download->title }}/{{ $download->file_type }}</h5>
                {!! htmlspecialchars_decode($download->description) !!}
                @if($download->status==1)
                    <a class="btn btn-dark-gray btn-small" style="margin-top:30px;" href="{{ Storage::url($download->file) }}" ><span class="fa fa-download" style="padding-right: 5px;"></span>Download file/s</a>
                @else
                    <a class="btn btn-dark-gray btn-small" style="margin-top:30px;" disabled="disabled"><span class="fa fa-download" style="padding-right: 5px;"></span>Download file/s</a>
                    <br><label class="text-danger">!This file download has been disabled. Please contact admin</label>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- end section -->

@endsection
