@extends('user/app')

{{--meta tags--}}
@section('meta')
    <title>CODEI SYSTEMS | Search results</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

@endsection
{{--end meta tags--}}

{{--additional css--}}
@section('additional-css')

@endsection
{{--end additional css--}}
@section('page')
    @php
        $page = 0
    @endphp
@endsection
@section('main-content')

    <section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-6
            text-md-left" >
                    <!-- start page title -->
                    <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 ">Search results for "{{ $keywords }}"</h1>
                    <small>({{ $results->count() }}) Total results found</small>
                    <!-- end page title -->
                </div>

            </div>
        </div>
    </section>

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom sm-padding-15px-lr center-col">
                    @if($results->count()>0)
                        @foreach($results as $result)
                        <!-- start post item -->
                            <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                                <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="{{ route('post',$result->slug) }}"><img src="{{ Storage::url($result->image) }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="blog-text col-md-6 display-table no-padding">
                                    <div class="display-table-cell vertical-align-middle">
                                        <div class="content margin-20px-bottom sm-no-padding-left ">
                                            <a href="{{ route('post',$result->slug) }}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block">{{ $result->title }}</a>
                                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>{{ $result->created_at->toFormattedDateString() }}</span></div>
                                            <p class="no-margin width-95">{{ $result->subtitle }}</p>
                                        </div>
                                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="{{ route('post',$result->slug) }}">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end post item -->

                            @endforeach
                        @else
                            <blockquote class="border-color-deep-pink">
                                <p>Ops! No article could be found with the search term <span class="text-info">"{{ $keywords }}"</span>, please refine your search and try again</p>
                            </blockquote>
                        @endif

                    <!-- start slider pagination -->
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul>
                                    {{ $results->links() }}
                                </ul>
                            </div>
                        </div>
                        <!-- end slider pagination -->

                </main>
            </div>
        </div>
    </section>


@endsection
