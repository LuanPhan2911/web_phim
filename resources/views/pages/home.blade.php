@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>

            <div id="halim_related_movies-2xx" class="wrap-slider">
                <div class="section-bar clearfix">
                    <h3 class="section-title"><span>Phim Hot</span></h3>
                </div>
                <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film">

                    @foreach ($hot_movies as $movie)
                        <article class="thumb grid-item post-38498">
                            <div class="halim-item">
                                <a class="halim-thumb" href="{{ route('movie', ['movie' => $movie->slug]) }}"
                                    title="Đại Thánh Vô Song">
                                    <figure><img class="lazy img-responsive" src="{{ asset('storage/' . $movie->avatar) }}"
                                            alt="{{ $movie->title }}" title="{{ $movie->title }}"></figure>
                                    <span class="status">{{ $movie->resolution }}</span>
                                    <span class="episode"><i class="fa fa-play"
                                            aria-hidden="true"></i>{{ $movie->subtitle }}</span>
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

            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                @foreach ($categories as $category)
                    <section id="halim-advanced-widget-2">
                        <div class="section-heading">
                            <a href="danhmuc.php" title="Phim Bộ">
                                <span class="h-text">{{ $category->title }}</span>
                            </a>
                        </div>
                        <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                            @foreach ($category->movies as $movie)
                                <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                                    <div class="halim-item">
                                        <a class="halim-thumb" href="{{ route('movie', ['movie' => $movie->slug]) }}">
                                            <figure><img src="{{ asset('storage/' . $movie->avatar) }}"
                                                    class="lazy img-responsive" alt="{{ $movie->title }}"
                                                    title="{{ $movie->title }}"></figure>
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
                    </section>
                    <div class="clearfix"></div>
                @endforeach



            </main>
            @include('pages.includes.sidebar')
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            var owl = $('#halim_related_movies-2');
            owl.owlCarousel({
                loop: true,
                margin: 4,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                nav: true,
                navText: ['<i class="hl-down-open rotate-left"></i>',
                    '<i class="hl-down-open rotate-right"></i>'
                ],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    480: {
                        items: 3
                    },
                    600: {
                        items: 4
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>
@endsection
