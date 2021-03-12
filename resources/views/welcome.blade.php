@extends('layouts.master')
@section('title')
    <title>Tourism</title>
    <meta property="og:title" content="Tourism | {{ __('lang.home') }}" />
    <meta property="og:image" content="{{ asset('assets/img/logos.png') }}" />
@endsection
@section('content')

    <div class="main-slider owl-carousel owl-theme">
        <div class="slider-item item-bg-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-item">
                            <div class="slider-content">
                                <span>{{ __('lang.historic_build') }}</span>
                                <h1>{{ __('lang.unusual_tour') }} & <br></h1>
                                <p>{{ __('lang.special_offer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item item-bg-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-item">
                            <div class="slider-content">
                                <span>{{ __('lang.historic_build') }}</span>
                                <h1>{{ __('lang.unusual_tour') }} & <br></h1>
                                <p>{{ __('lang.special_offer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item item-bg-three">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-item">
                            <div class="slider-content">
                                <span>{{ __('lang.historic_build') }}</span>
                                <h1>{{ __('lang.unusual_tour') }} & <br></h1>
                                <p>{{ __('lang.special_offer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <section class="room-area">
        <div class="container">
            <div class="section-title">
                <span>{{ __('lang.ommabop') }}</span>
                <h3>{{ __('lang.uzb') }}</h3>
            </div>
            <div class="room-slider owl-carousel owl-theme">
                @foreach($tours as $key=>$tour)
                <div class="col-lg-12 col-md-12">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ asset(str_replace('public', 'storage', $tour->picture)) }}" alt="image" style="width:360px;height:250px">
                            <div class="night-btn">
                                <a href="room.html#" class="default-btn-one">${{ $tour->price }}</a>
                            </div>
                        </div>
                        <div class="room-content">
                            <h3>{{ $tour->title }}</h3>
                            <p>{{ Str::limit($tour->description, 120) }}</p>
                            <div class="room-btn-book">
                                <a href="{{route('tour.show', $tour->id)}}" class="room-btn-one">{{ __('lang.book_now') }}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            {{ $tours->links() }}

        </div>
    </section>




    <section class="room-page-section">
        <div class="container">
            <div class="section-title">
                <span>{{ __('lang.tours') }}</span>
                <h3>{{ __('lang.world') }}</h3>
            </div>
            <div class="row">
                @foreach($uzb as $key=>$tour)
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <div class="room-image">
                        <img src="{{ asset(str_replace('public', 'storage', $tour->picture)) }}" alt="image" style="width:360px;height:250px">
                        <div class="night-btn">
                            <a href="room.html#" class="default-btn-one">${{ $tour->price }}</a>
                        </div>
                    </div>
                    <div class="room-content">
                        <h3>{{ $tour->title }}</h3>
                        <p>{{ Str::limit($tour->description, 120) }}</p>
                        <div class="room-btn-book">
                            <a href="{{route('tour.show', $tour->id)}}" class="room-btn-one">{{ __('lang.book_now') }}
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            {{ $uzb->links() }}
        </div>
    </section>



    


@endsection
