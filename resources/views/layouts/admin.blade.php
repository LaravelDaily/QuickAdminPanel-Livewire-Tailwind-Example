<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>{{ trans('panel.site_title') }}</title>
    @livewireStyles
</head>

<body class="text-blueGray-800 antialiased">

    <noscript>You need to enable JavaScript to run this app.</noscript>

    <div id="app">
        <x-sidebar />

        <div class="relative md:ml-64 bg-gray-100 pb-12 min-h-screen">
            <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12"></div>

            <div class="relative px-4 md:px-10 mx-auto w-full min-h-full -m-48">
                @yield('content')

                <x-footer />
            </div>
        </div>

    </div>

    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
        @yield('scripts')
        @stack('scripts')
</body>

</html>