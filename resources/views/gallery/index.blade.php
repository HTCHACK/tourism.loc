@extends('layouts.master')
@section('title')
    <title>Tourism | {{ __('lang.gallery') }}</title>
    <meta property="og:title" content="Touris | {{ __('lang.gallery') }}" />
    <meta property="og:image" content="{{ asset('assets/img/logos.png') }}" />
@endsection


@section('content')

<section class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <h2>{{ __('lang.gallery') }}</h2>
            <p><a href="{{ route('home') }}">{{ __('lang.home') }}</a> / {{ __('lang.gallery') }}</p>
        </div>
    </div>
</section>


<div class="gallery-page-section">
    <div class="container-fluid">
        <div id="Container" class="row">

            @foreach ($galleries as $key => $gallery)  
            <div class="col-lg-3 col-sm-6">
                <div class="single-work">   
                    <div class="work-image">
                        <img src="{{ asset(str_replace('public', 'storage', $gallery->picture)) }}" style="width:351px;height:275.28px" alt="{{ $gallery->name }}">
                        <a href="{{ asset(str_replace('public', 'storage', $gallery->picture)) }}"  class="popup-btn">{{ __('lang.view') }}</a>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</div>

@endsection