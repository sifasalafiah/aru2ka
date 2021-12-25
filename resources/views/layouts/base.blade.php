<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" data-font-size="{{ config('aru2ka.ui.font_size') }}">
<head>
    <title>{{ $title ?? '' }} | {{ config('app.name') }}</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta name="turbolinks-enabled" content="{{ config('aru2ka.platform.features.turbolinks') }}">

    @stack('meta')

    <style>
        :root {
            --app-accent-color: var(--{{ config('aru2ka.ui.color') }});
            --app-login-background: url('{{ url(config('aru2ka.ui.login_background')) }}');
        }
    </style>
    <link rel="stylesheet" type="text/css" data-turbolinks-track="reload"
          href="{{ mix('semantic/semantic.min.css', 'vendor/aru2ka') }}"/>
    <link rel="stylesheet" type="text/css" data-turbolinks-track="reload" href="{{ mix('css/all.css', 'vendor/aru2ka') }}"/>
    <link rel="stylesheet" type="text/css" data-turbolinks-track="reload" href="{{ mix('css/app.css') }}"/>

    @stack('style')
    @stack('head')
    <script data-turbolinks-track="reload" src="{{ mix('js/vendor.js', 'vendor/aru2ka') }}"></script>
    <script defer data-turbolinks-track="reload" src="{{ mix('js/platform.js', 'vendor/aru2ka') }}"></script>

    <script defer data-turbolinks-track="reload" src="{{ mix('js/app.js') }}"></script>
</head>

<body data-theme="{{ config('aru2ka.ui.theme') }}" class="{{ $bodyClass ?? '' }} @yield('body.class')">

{{ $slot }}

@stack('script')
@stack('body')
</body>
</html>
