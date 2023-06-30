@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <main>
        <div class="featured-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="text-muted"><span class="typewrite d-inline" data-period="2000"
                                data-type='[ " Travel Blogger. ", "Content Writter. ", "Food Guides " ]'></span></p>
                        <h2>Hello, I’m <span>Steven</span></h2>
                        <h3 class="mb-20"> Welcome to my blog</h3>
                        <h5 class="text-muted">Don't miss out on the latest news about Travel tips, Hotels review, Food
                            guide...</h5>
                        <form class="input-group form-subcriber mt-30 d-flex">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                        </form>
                    </div>
                    <div class="col-lg-6 text-end d-none d-lg-block">
                        <img src="{{ asset('assets') }}/imgs/authors/featured.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Featured posts</h5>
                        </div>
                        @if($tagCloud->where('is_featured',true)->count() > 0)
                        <div class="col-md-8 text-md-end font-small align-self-center">
                            <p class="d-inline-block mr-5 mb-0"><i
                                    class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                            <ul class="list-inline d-inline-block tags">
                                @foreach ($tagCloud->where('is_featured',true) as $tag)
                                <li class="list-inline-item"><a href="{{ route('home.search',$tag->slug) }}"># {{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @include('components.featured-posts')
        </div>
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">Travel tips</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('assets') }}/imgs/news/news-6.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-info">Artists</span></a>
                                                    <a href="category.html"><span
                                                            class="post-cat text-success">Film</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Easy Ways to Use Alternatives to Plastic</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as
                                                            career-defining for a&nbsp;startup founder&nbsp;as an elite
                                                            university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">27 August</span>
                                                        <span class="time-reading has-dot">12 mins read</span>
                                                        <span class="post-by has-dot">23k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('assets') }}/imgs/news/news-8.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span class="post-cat">Fashion</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Tips for Growing Healthy, Longer Hair</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Proin vitae placerat quam. Ut sodales eleifend urna, in
                                                            condimentum tortor ultricies eu. Nunc auctor iaculis dolorProin
                                                            vitae placerat quam. Proin vitae placerat quam.</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="time-reading has-dot">6 mins read</span>
                                                        <span class="post-by has-dot">3k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('assets') }}/imgs/news/news-10.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <span class="top-right-icon bg-secondary"><i
                                                        class="elegant-icon icon_heart_alt"></i></span>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-success">Lifestyle</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Project Ideas Around the House</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                            tempor condimentum metus non tempor. Maecenas non augue aliquam,
                                                            facilisis lectus quis, lacinia risus.</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">27 August</span>
                                                        <span class="time-reading has-dot">12 mins read</span>
                                                        <span class="post-by has-dot">23k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                style="background-image: url({{ asset('assets') }}/imgs/news/news-12.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                    </li>
                                                    <li><a class="fb" href="#" title="Share on Facebook"
                                                            target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank"
                                                            title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank"
                                                            title="Pin it"><i
                                                                class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span
                                                            class="post-cat text-danger">Hotels</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">How to Give Yourself a Spa Day from Home</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as
                                                            career-defining for a&nbsp;startup founder&nbsp;as an elite
                                                            university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                        <span class="post-on">18 August</span>
                                                        <span class="time-reading has-dot">14 mins read</span>
                                                        <span class="post-by has-dot">25k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        @include('components.latest-posts')
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            @include('widgets.author')
                            @include('widgets.most-popular')
                            @include('widgets.last-comments')
                            @include('widgets.instagram')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
