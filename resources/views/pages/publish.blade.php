@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="yoast_breadcrumb hidden-xs"><span><span><a href=""></a>Năm
                                        <span class="breadcrumb_last"
                                            aria-current="page">{{ $year }}</span></span></span></div>
                        </div>
                    </div>
                </div>
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <section>
                    <div class="section-bar clearfix">
                        <h1 class="section-title"><span>Phim {{ $year }}</span></h1>
                    </div>
                    <div class="halim_box">
                        @foreach ($movies as $movie)
                            <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-27021">
                                <div class="halim-item">
                                    <a class="halim-thumb" href="{{ route('movie', $movie->slug) }}"
                                        title="VŨNG LẦY PHẦN 1">
                                        <figure><img class="lazy img-responsive"
                                                src="{{ asset("/storage/$movie->avatar") }}" alt="VŨNG LẦY PHẦN 1"
                                                title="VŨNG LẦY PHẦN 1"></figure>
                                        <span class="status">{{ $movie->resolution }}</span><span class="episode"><i
                                                class="fa fa-play" aria-hidden="true"></i>{{ $movie->subtitle }}</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title ">
                                                <p class="entry-title">{{ $movie->title }}</p>
                                                <p class="original_title">{{ $movie->english_title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        @endforeach





                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        {{ $movies->links('pagination::bootstrap-4') }}
                    </div>
                </section>
            </main>
            @include('pages.includes.sidebar')
        </div>
    </div>
@endsection
