<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    @include('layouts.head')
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    @if (Route::currentRouteName()!='login')
    @include('layouts.menu')
    @endif
    @yield('content')
    @if (Route::currentRouteName()!='login')
    @include('layouts.footer')
    @endif
    @include('layouts.scripts')
</body>

</html>
