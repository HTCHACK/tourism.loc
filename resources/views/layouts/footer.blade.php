<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-8 col-sm-6">
                <div class="footer-content">
                    <img src="{{ asset('assets/img/logos.png') }}" width="150px" alt="image">
                </div>
            </div>
            <div class="col-lg-3 col-md-8 col-sm-6">
                <div class="footer-content">
                    <h2>{{__('lang.pages')}}</h2>
                </div>
                <ul class="footer-list">
                    <li>
                        <a href="{{ route('home') }}">{{__('lang.home')}}</</a>
                    </li>
                    <li>
                        <a href="{{ route('tour.index') }}">{{__('lang.tours')}}</</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}">{{__('lang.gallery')}}</</a>
                    </li>
                    <li>
                        <a href="{{ route('contactspage.index') }}">{{__('lang.about_us')}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-8 col-sm-6">
                <div class="footer-content">
                    <h2>{{__('lang.books')}}</h2>
                </div>
                <ul class="footer-list">
                    <li>
                        <a href="{{ route('tour.index') }}">{{__('lang.buy_tour')}}</a>
                    </li>
                    <li>
                        <a href="{{ route('tour.index') }}">{{__('lang.book_now')}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-8 col-sm-6">
                <div class="footer-content">
                    <h2>{{__('lang.payment')}}</h2>
                </div>
                <ul class="footer-list">
                    <li style="display:inline-block"><a href="{{ route('tour.index') }}"><img
                        src="{{ asset('assets/img/partnar/payme.svg') }}" width="74px"
                        height="37px"></a>
            </li>
            <li style="display:inline-block"><a href="{{ route('tour.index') }}"><img
                        src="{{ asset('assets/img/partnar/click.svg') }}" width="74px"
                        height="40px"></a>
            </li>
            <li style="display:inline-block"><a href="{{ route('tour.index') }}"><img
                        src="{{ asset('assets/img/partnar/visaa.png') }}" width="50px"
                        height="50px"></a>
            </li>
            <li style="display:inline-block"><a href="{{ route('tour.index') }} "><img
                        src="{{ asset('assets/img/partnar/mastercard3.png') }}" width="100px"
                        height="26.11px"></a>
            </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="footer-bottom-content">
                        <p>Copyright <i class="far fa-copyright"></i> 2021 . All Rights Reserved by <a href=""
                                target="_blank"></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="footer-bottom-links">
                        <p>
                            <a href="index-2.html">Terms & Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="back-to-top">{{__('lang.top')}}</div>
