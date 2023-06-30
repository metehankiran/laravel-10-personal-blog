@extends('layouts.app')
@section('title', $category->title)
@section('content')
<main>
    <!--archive header-->
    <div class="archive-header pt-50">
        <div class="container">
            <h2 class="font-weight-900">{{ $category->title }}</h2>
            <div class="breadcrumb">
                <a href="{{ route('home.index') }}" rel="nofollow">Home</a>
                <span></span> {{ $category->title }}
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
    </div>
    <div class="pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-3">
                        <div class="loop-list loop-list-style-1">
                            @foreach($posts as $post)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ $post->image }})">
                                                <a class="img-link" href="{{ route('home.post',$post) }}"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-primary">{{ $post->category->title }}</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="{{ route('home.post',$post) }}">{{ $post->title }}</a>
                                                @if($post->is_featured) <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span> @endif
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

                    {{ $posts->links('vendor.pagination.default') }}

                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                            <img class="about-author-img mb-25" src="{{ asset('assets') }}/imgs/authors/author.jpg" alt="">
                            <h5 class="mb-20">Hello, I'm Steven</h5>
                            <p class="font-medium text-muted">Hi, I’m Stenven, a Florida native, who left my career in corporate wealth management six years ago to embark on a summer of soul searching that would change the course of my life forever.</p>
                            <strong>Follow me: </strong>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Most popular</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Spending Some Quality Time with Kids? It’s Possible</a></h6>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">05 August</span>
                                                    <span class="post-by has-dot">150 views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="{{ asset('assets') }}/imgs/news/thumb-6.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Relationship Podcasts are Having “That” Talk</a></h6>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="post-by has-dot">6k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="{{ asset('assets') }}/imgs/news/thumb-7.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Here’s How to Get the Best Sleep at Night</a></h6>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">15 August</span>
                                                    <span class="post-by has-dot">16k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="{{ asset('assets') }}/imgs/news/thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">America’s Governors Get Tested for a Virus That Is Testing Them</a></h6>
                                                <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="post-by has-dot">3k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="{{ asset('assets') }}/imgs/news/thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Instagram</h5>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li>
                                        <a href="{{ asset('assets') }}/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{ asset('assets') }}/imgs/news/thumb-1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets') }}/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{ asset('assets') }}/imgs/news/thumb-2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets') }}/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{ asset('assets') }}/imgs/news/thumb-3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets') }}/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{ asset('assets') }}/imgs/news/thumb-4.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets') }}/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{ asset('assets') }}/imgs/news/thumb-5.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets') }}/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{ asset('assets') }}/imgs/news/thumb-6.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
