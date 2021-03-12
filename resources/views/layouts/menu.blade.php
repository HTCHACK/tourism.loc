<div class="navbar-area fixed-top">
    <div class="overtop-mobile-nav">
        <div class="logo">
            <a href="">
                <img src="{{ asset('assets/img/logos.png') }}" alt="logo">
            </a>
        </div>
    </div>


    <div class="overtop-nav">
        <div class="container">

            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href=""><img src="{{ asset('assets/img/logos.png') }}" width="100px"
                        alt="logo"></a>
                            
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'home') ? 'active' : null }}">
                            <a href="{{ route('home') }}" class="nav-link">{{ __('lang.home') }}</a>
                        </li>
                        <li
                            class="nav-item {{ Str::contains(Route::currentRouteName(), 'contactspage') ? 'active' : null }}">
                            <a href="{{ route('contactspage.index') }}"
                                class="nav-link">{{ __('lang.about_us') }}</a>
                        </li>
                        <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'tour') ? 'active' : null }}">
                            <a href="{{ route('tour.index') }}" class="nav-link">{{ __('lang.tours') }}</a>
                        </li>

                        <li
                            class="nav-item {{ Str::contains(Route::currentRouteName(), 'gallery') ? 'active' : null }}">
                            <a href="{{ route('gallery.index') }}" class="nav-link">{{ __('lang.gallery') }}</a>
                        </li>
                        @foreach ($languages as $lang)
                            @if ($lang == 'uz')
                                <li class="nav-item"><a href="{{ url()->current() . '/?language=' . $lang }}"><img
                                            src="{{ asset('assets/img/uzb.png') }}" width="30px">
                                        {{ __('lang.uzbek') }}</a></li>
                            @elseif($lang == 'en')
                                <li class="nav-item"><a href="{{ url()->current() . '/?language=' . $lang }}"><img
                                            src="{{ asset('assets/img/eng.webp') }}" width="30px">
                                        {{ __('lang.english') }}</a></li>
                            @elseif($lang == 'ru')
                                <li class="nav-item"><a href="{{ url()->current() . '/?language=' . $lang }}"><img
                                            src="{{ asset('assets/img/rus.jpg') }}" width="30px">
                                        {{ __('lang.russian') }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
