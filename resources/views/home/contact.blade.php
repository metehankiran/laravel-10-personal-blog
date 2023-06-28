@extends('layouts.app')
@section('title', 'Contact us')
@section('content')
    <main class="bg-grey pb-30">
        <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white"
            style="background-image: url({{ asset('assets') }}/imgs/news/news-17.jpg)">
            <div class="container entry-header-content">
                <h1 class="entry-title mb-50 font-weight-900">
                    Get in Touch
                </h1>
            </div>
        </div>
        <div class="container single-content">
            <div class="entry-wraper mt-50">
                <p class="font-large">about me</p>
                <hr class="wp-block-separator is-style-wide">
                <p><span class="mr-5">
                        <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline">
                        </ion-icon>
                    </span><strong>Address</strong>: Lorem 142 Str., 2352, Ipsum, State, USA</p>
                <p><span class="mr-5">
                        <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="home outline">
                        </ion-icon>
                    </span><strong>Our website</strong>: <a href="https://alithemes.com">https://lyyzu.app</a></p>
                <p><span class="mr-5">
                        <ion-icon name="planet-outline" role="img" class="md hydrated" aria-label="planet outline">
                        </ion-icon>
                    </span><strong>Personal email</strong>: <a
                        href="mailto:metehankiran@outlook.com">metehankiran@outlook.com</a></p>
                <h3 class="mt-30">Advertise</h3>
                <hr class="wp-block-separator is-style-wide">
                <p>Please contact us directly at <a href="mailto:contact@lyzzu.app">[contact@lyyzu.app]</a>. For large or
                    unique
                    campaigns please email <a href="mailto:contact@lyzzu.app">[contact@lyyzu.app]</a> for
                    requests-for-proposal and additional pricing information. </p>
                <h1 class="mt-30" id="contact-result">Get in touch</h1>
                <hr class="wp-block-separator is-style-wide">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Please heed the warnings below and try again.</strong>
                        <ul class="mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="form-contact comment_form" action="{{ route('home.contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" value="{{ old('name') }}"
                                    placeholder="Name*" autocomplete="on">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" value="{{ old('email') }}"
                                    placeholder="Email*" autocomplete="on">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="phone" id="phone" type="text" value="{{ old('phone') }}"
                                    placeholder="Phone" autocomplete="on">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" value="{{ old('message') }}" cols="30" rows="9" placeholder="Message*"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm">Send message</button>
                    </div>
                </form>
            </div>
        </div>
        <!--container-->
    </main>
@endsection
