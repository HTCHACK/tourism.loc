@extends('layouts.master')
@section('title')
<title>Tourism | {{ __('lang.books') }}</title>
<meta property="og:title" content="Touris | {{ __('lang.books') }}" />
<meta property="og:image" content="{{ asset('assets/img/logos.png') }}" />
@endsection

@section('content')
<section class="page-banner" style="background-image:url({{ asset(str_replace('public', 'storage', $tour->picture)) }}) ">
    <div class="container">
        <div class="page-banner-content">
            <h2>{{ $tour->title }}</h2>
            <p><a href="{{ route('home') }}">{{ __('lang.home') }}</a> / {{ __('lang.tours') }}</p>
        </div>
    </div>
</section>


<section class="single-room-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="image-slider owl-carousel owl-theme">
                    <div class="article-img">
                        <img src="{{ asset(str_replace('public', 'storage', $tour->picture)) }}" alt="blog-details">
                    </div>
                    
                </div>
                
                <div class="single-room-content">
                    <h3>{{ $tour->title }}</h3>
                    <p>{{ $tour->description }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-leave-reply">
                    <div class="reply-content">
                        <h3>{{ __('lang.buy_tour') }}</h3>
                    </div>
                    <form class="reservation-form">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>{{ __('lang.name') }}</label>
                                    <input type="text" name="name" class="form-control" placeholder="{{ __('lang.name') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('lang.phone_number') }}</label>
                                    <input type="text" name="phone_number" id="buyphone" class="form-control" placeholder="+(998)__-___-____">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('lang.payment') }}</label>
                                    <input type="number" name="phone_number" class="form-control" placeholder="{{ __('lang.payment') }}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="send-payme">
                                    <button type="submit" class="btn-payme"><img src="{{ asset('assets/img/partnar/payme.svg') }}"></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
                <div class="single-leave-reply">
                    <div class="reply-content">
                        <h3>{{ __('lang.order') }}</h3>
                    </div>
                    <form class="reservation-form" method="post" action="{{ route('orders.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>{{ __('lang.name') }}</label>
                                    <input type="text" name="name" class="form-control" placeholder="{{ __('lang.name') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('lang.phone_number') }}</label>
                                    <input type="text" name="phone_number" id="phone" class="form-control" placeholder="+(998)__-___-____">
                                </div>
                                    <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="send-btn-one">{{ __('lang.order_now') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="single-room-sidebar mt-0">
                    <div class="single-room-map">
                        <div class="single-room-map-area">
                                {!! $tour->location !!}
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection