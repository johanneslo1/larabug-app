<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <title>@yield('title', 'Laravel Error Tool') - {{ config('app.name') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/frontend.css') }}">

    @include('frontend.partials.meta')

    @if(!app()->isLocal())
        @include('frontend.partials.analytics')
    @endif
</head>
<body class="flex flex-col w-full min-h-screen font-sans antialiased text-gray-900">


@if(!config('larabug.minimal_frontend'))
@include('frontend.partials.header')
@else
@include('exceptions.partials.header')
@endif

<main class="flex-grow">
    @yield('content')
</main>

@if(!config('larabug.minimal_frontend'))
@include('frontend.partials.footer')
@endif

<script src="{{ mix('js/frontend.js') }}"></script>

@include('cookie-consent::index')

@stack('scripts')

<script src="https://analytics.webbuilds.nl/tracker.js" data-domain="www.larabug.com" defer></script>
</body>
</html>
