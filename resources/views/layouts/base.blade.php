<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" data-font-size="{{ config('arunika.ui.font_size') }}">
<head>
    <title>{{ $title ?? '' }} | {{ config('app.name') }}</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta name="turbolinks-enabled" content="{{ config('arunika.platform.features.turbolinks') }}">

    @stack('meta')
    <style>
        :root {
            --app-accent-color: var(--{{ config('arunika.ui.color') }});
            --app-login-background: url('{{ url(config('arunika.ui.login_background')) }}');
        }
    </style>
    <link rel="stylesheet" type="text/css" data-turbolinks-track="reload"
          href="{{ asset('semantic/semantic.min.css') }}"/>
    <link rel="stylesheet" type="text/css" data-turbolinks-track="reload" href="{{ asset('css/all.css') }}"/>
    <link rel="stylesheet" type="text/css" data-turbolinks-track="reload" href="{{ asset('css/app.css') }}"/>

    @stack('style')
    @stack('head')

    <script data-turbolinks-track="reload" src="{{ asset('js/vendor.js') }}"></script>

    <script defer data-turbolinks-track="reload" src="{{ asset('js/platform.js') }}"></script>

    <script defer data-turbolinks-track="reload" src="{{ asset('js/app.js') }}"></script>
</head>

<body data-theme="{{ config('arunika.ui.theme') }}" class="{{ $bodyClass ?? '' }} @yield('body.class')">

{{ $slot }}

@stack('script')
@stack('body')
</body>
</html>
