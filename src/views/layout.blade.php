<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>{{config('app.name')}} - سوالات متداول</title>
</head>

<body>
    <nav>
        <a href="/">صفحه اصلی </a>
        &nbsp; &nbsp;
        <a href="{{route('faq.index')}}">سوالات متداول </a>
        &nbsp; &nbsp;
        <a href="/faq/faqAdmin">مدیریت سوالات متداول </a>

    </nav>

    <h1>@yield('pageTitle')</h1>

    @section('content')
    @show

</body>

</html>
