@extends('layouts.master')
@section('title')
<title>Tourism | {{ __('lang.tours') }}</title>
<meta property="og:title" content="Tourism | {{ __('lang.tours') }}" />
<meta property="og:image" content="{{ asset('assets/img/logos.png') }}" />
@endsection

@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <h2>{{ __('lang.uzb') }}</h2>
            <p><a href="{{ route('home') }}">{{ __('lang.home') }}</a> / {{ __('lang.tours') }}</p>
        </div>
    </div>
</section>


<section class="room-page-section">
    <div class="container">
        <div class="row">
            @foreach($tours as $key=>$tour)
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
        {{ $tours->links() }}
    </div>
</section>
@endsection