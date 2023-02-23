<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBlog - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">
</head>

<body>
    @include('partials.navigation')

    @yield('content')
</body>

</html>
