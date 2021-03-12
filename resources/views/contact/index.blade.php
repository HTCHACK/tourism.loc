@extends('layouts.master')
@section('title')
    <title>Tourism | {{ __('lang.about_us') }}</title>
    <meta property="og:title" content="Touris | {{ __('lang.about_us') }}" />
    <meta property="og:image" content="{{ asset('assets/img/logos.png') }}" />
@endsection


@section('content')
    <section class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <h2>{{ __('lang.about_us') }}</h2>
                <p><a href="{{ route('home') }}">{{ __('lang.home') }}</a> / {{ __('lang.about_us') }}</p>
            </div>
        </div>
    </section>


    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <h4>{{ __('lang.location') }}</h4>
                        <p><a href=""><br></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-call-answer"></i>
                        </div>
                        <h4>{{ __('lang.number') }}</h4>
                        <p><a href="tel:444587458"></a></p>
                        <p><a href="tel:444587458"></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h4>{{ __('lang.email') }}</h4>
                        <p><a href=""><span></span></a></p>
                        <p><a href=""><span></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47945.81810555698!2d69.23352487413224!3d41.31726814127763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2sTashkent!5e0!3m2!1sen!2s!4v1614746744784!5m2!1sen!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="list-style:none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="contact-area">
                        <div class="contactForm">
                            <form method="POST" id='demo-form' action="{{ route('contacts.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="{{ __('lang.name') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" placeholder="+(998)__-___-____"
                                                class="form-control" id="phone" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                required data-error="Write your message" placeholder="{{ __('lang.message') }}"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LfiwHUaAAAAAOLfJ9mSNZDpwMKDBiw9Vub9WLSo"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="send-btn">
                                            <button type="submit" class="send-btn-one" style="float:left">
                                                {{ __('lang.send') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
