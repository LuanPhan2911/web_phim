{{-- <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Trending</span>
            </div>
        </div>
        <section class="tab-content">
            <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    @foreach ($trending_movies as $movie)
                        <div class="item post-37176">
                            <a href="{{ route('movie', ['movie' => $movie->slug]) }}" title="{{ $movie->title }}">
                                <div class="item-link">
                                    <img src="{{ asset("storage/$movie->avatar") }}" class="lazy post-thumb"
                                        alt="{{ $movie->title }}" title="{{ $movie->title }}" />
                                    <span class="is_trailer">Trailer</span>
                                </div>
                                <p class="title">{{ $movie->title }}</p>
                            </a>
                            <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                            <div style="float: left;">
                                <span class="user-rate-image post-large-rate stars-large-vang"
                                    style="display: block;/* width: 100%; */">
                                    <span style="width: 0%"></span>
                                </span>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</aside> --}}
<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <h6>Top Views</h6>
                <nav>
                    <div class="nav nav-tabs" role="tablist">
                        <button class="active btn btn-primary" data-toggle="tab" data-target="#nav-day" type="button"
                            role="tab">Day</button>
                        <button class="btn btn-primary" data-toggle="tab" data-target="#nav-week" type="button"
                            role="tab" aria-selected="false">Week</button>
                        <button class="btn btn-primary" data-toggle="tab" data-target="#nav-month" type="button"
                            role="tab" aria-selected="false">Month</button>
                    </div>
                </nav>
            </div>
        </div>
        <section class="tab-content" id="nav-tabContent">
            <div role="tabpanel" class="tab-pane active show halim-ajax-popular-post" id="nav-day">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    <div class="item post-37176">
                        <a href="{{ route('movie', ['movie' => $movie->slug]) }}" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                            <div class="item-link">
                                <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                    class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                    title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                <span class="is_trailer">Trailer</span>
                            </div>
                            <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                        </a>
                        <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                        <div style="float: left;">
                            <span class="user-rate-image post-large-rate stars-large-vang"
                                style="display: block;/* width: 100%; */">
                                <span style="width: 0%"></span>
                            </span>
                        </div>
                    </div>



                </div>
            </div>
            <div role="tabpanel" class="tab-pane halim-ajax-popular-post" id="nav-week">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    <div class="item post-37176">
                        <a href="{{ route('movie', ['movie' => $movie->slug]) }}" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                            <div class="item-link">
                                <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                    class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                    title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                <span class="is_trailer">Trailer</span>
                            </div>
                            <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                        </a>
                        <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                        <div style="float: left;">
                            <span class="user-rate-image post-large-rate stars-large-vang"
                                style="display: block;/* width: 100%; */">
                                <span style="width: 0%"></span>
                            </span>
                        </div>
                    </div>



                </div>
            </div>
            <div role="tabpanel" class="tab-pane halim-ajax-popular-post" id="nav-month">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    <div class="item post-37176">
                        <a href="{{ route('movie', ['movie' => $movie->slug]) }}" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                            <div class="item-link">
                                <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                    class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                    title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                <span class="is_trailer">Trailer</span>
                            </div>
                            <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                        </a>
                        <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                        <div style="float: left;">
                            <span class="user-rate-image post-large-rate stars-large-vang"
                                style="display: block;/* width: 100%; */">
                                <span style="width: 0%"></span>
                            </span>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <div class="clearfix"></div>
    </div>
</aside>
