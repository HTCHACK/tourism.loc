@extends('layouts.master')
@section('title')

    <title>Authentication</title>

@endsection
@section('content')
    <section class="main"
        style="background-image: url({{ asset('assets/img/footer-bg.jpg') }});background-repeat:no-repeat;background-size:cover;background-position:center;">
        <div class="layer">
            <div class="content-w3ls">
                <div class="text-center icon">
                    <img src="{{ asset('assets/img/logos.png') }}" width="150px" alt="image">
                </div>
                <!---728x90--->
                <div class="content-bottom">
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="field-group">
                            <div class="wthree-field">
                                <input name="phone_number" type="text" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="wthree-field">
                                <input name="password" type="password" placeholder="*******">
                            </div>
                        </div>
                        <div class="wthree-field" style="padding-left: 5.4%">

                            <div class="g-recaptcha" data-sitekey="6LfiwHUaAAAAAOLfJ9mSNZDpwMKDBiw9Vub9WLSo"></div>

                        </div>
                        <div class="wthree-field">
                            <button type="submit" class="btn">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
