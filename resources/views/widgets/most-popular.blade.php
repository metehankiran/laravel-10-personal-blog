<div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
    <div class="widget-header-1 position-relative mb-30">
        <h5 class="mt-5 mb-30">Most popular</h5>
    </div>
    <div class="post-block-list post-module-1">
        <ul class="list-post">
            @foreach ($posts->sortByDesc('views')->take(5) as $post)
            <li class="mb-30 wow fadeInUp @if(!$loop->last) animated @endif">
                <div
                    class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                    <div class="post-content media-body">
                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                href="{{ route('home.post', $post) }}">{{ $post->title }}</a></h6>
                        <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                            <span class="post-on">{{ $post->formatted_published_date }}</span>
                            <span class="post-by has-dot">{{ $post->views }} views</span>
                        </div>
                    </div>
                    <div
                        class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{ route('home.post', $post) }}">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}">
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
