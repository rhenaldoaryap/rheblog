<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keywords','Rhedev, blog, portofolio, coding, website, web development, programming')">
    <meta name="description" content="@yield('meta_description','Rhedev dibuat sebagai tempat berbagi pengetahuan sekaligus portofolio')">
    <link rel="canonical" href="{{ url()->current() }}">

    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>
<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
    @include('sweetalert::alert')
</body>
</html>