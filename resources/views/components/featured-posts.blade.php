<div class="loop-grid mb-30">
    <div class="row">
        <div class="col-lg-8 mb-30">
            <div
                class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                <div class="arrow-cover"></div>
                <div class="slide-fade">
                    @foreach($posts->where('is_featured',true)->take(2) as $post)
                    <div class="position-relative post-thumb">
                        <div class="thumb-overlay img-hover-slide position-relative"
                            style="background-image: url({{ $post->image }}">
                            <a class="img-link" href="{{ route('home.post',$post) }}"></a>
                            <span class="top-left-icon bg-warning"><i
                                    class="elegant-icon icon_star_alt"></i></span>
                            <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                <div class="entry-meta meta-0 font-small mb-20">
                                    <a href="{{ route('home.category',$post->category) }}"><span
                                            class="post-cat text-info text-uppercase">{{ $post->category->title }}</span></a>
                                </div>
                                <h3 class="post-title font-weight-900 mb-20">
                                    <a class="text-white" href="{{ route('home.post',$post) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                    <span class="post-on">{{ $post->read_time }} minutes ago</span>
                                    <span class="hit-count has-dot">{{ $post->views }} Views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        @foreach($posts->where('is_featured',true)->skip(2)->take(4) as $post)
        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
            <div class="post-card-1 border-radius-10 hover-up">
                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                    style="background-image: url({{ $post->image }})">
                    <a class="img-link" href="{{ route('home.post',$post) }}"></a>
                    <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                    <ul class="social-share">
                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                        <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                    class="elegant-icon social_facebook"></i></a></li>
                        <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                    class="elegant-icon social_twitter"></i></a></li>
                        <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                    class="elegant-icon social_pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="post-content p-30">
                    <div class="entry-meta meta-0 font-small mb-10">
                        <a href="{{ route('home.category',$post->category) }}"><span class="post-cat text-success">{{ $post->category->title }}</span></a>
                    </div>
                    <div class="d-flex post-card-content">
                        <h5 class="post-title mb-20 font-weight-900">
                            <a href="{{ route('home.post',$post) }}">{{ $post->title }}</a>
                        </h5>
                        <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                            <span class="post-on">{{ $post->formatted_published_date }}</span>
                            <span class="time-reading has-dot">{{ $post->read_time }} mins read</span>
                            <span class="post-by has-dot">{{ $post->views }} views</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</div>
