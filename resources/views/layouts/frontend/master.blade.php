<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    @include('layouts.frontend.style')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        @yield('content')
        <!-- Header Area Start Here -->
        <header>
           @include('layouts.frontend.header')
        </header>
        <!-- Header Area End Here -->

        
        @yield('slider')

        <div class="about2-area">
            @yield('studi')
            {{-- @include('frontend.content.program_studi') --}}
        </div>

        
        {{-- @yield('count') --}}

        
        @yield('why')

        
        {{-- @yield('video') --}}

        <!-- Footer Area Start Here -->
        <footer>
            @include('layouts.frontend.footer')
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    @include('layouts.frontend.script')
</body>

</html>
