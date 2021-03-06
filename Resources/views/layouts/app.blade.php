<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<link href="{{ asset('css/coreui-icons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

{{-- BODY options, add following classes to body to change options
// Header options
1. '.header-fixed' - Fixed Header
// Sidebar options
1. '.sidebar-fixed' - Fixed Sidebar
2. '.sidebar-hidden' - Hidden Sidebar
3. '.sidebar-off-canvas' - Off Canvas Sidebar
4. '.sidebar-minimized' - Minimized Sidebar (Only icons)
5. '.sidebar-compact' - Compact Sidebar
// Aside options
1. '.aside-menu-fixed' - Fixed Aside Menu
2. '.aside-menu-hidden' - Hidden Aside Menu
3. '.aside-menu-off-canvas' - Off Canvas Aside Menu
// Footer options
1. '.footer-fixed' - Fixed footer
--}}


<body class="app header-fixed footer-fixed sidebar-fixed sidebar-minimized aside-menu-fixed sidebar-lg-show">
    <div id="app">
        @include('core::partials.header')
        <div class="app-body">
            @include('core::partials.sidebar')
            <main class="main">
                <div class="container-fluid">
                        @yield('content')
                    </div>
            </main>
            @include('core::partials.aside')
		</div>
        @include('core::partials.footer')
	</div>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/pace.min.js') }}"></script>
  <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/coreui.min.js') }}"></script>

</body>
</html>