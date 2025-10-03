<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset(\App\Helpers\Helper::getFavicon())}}" />
    <title>{{ \App\Helpers\Helper::getCompanyName() }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .brand-logo {
            max-height: 70px;
        }

        .search-card {
            border-radius: 12px;
            border: 1px solid #f46a05;
            box-shadow: 0 4px 10px rgba(244, 106, 5, 0.1);
        }

        .btn-orange {
            background-color: #f46a05;
            border: none;
        }

        .btn-orange:hover {
            background-color: #d75a04;
        }

        .verified-card {
            border-radius: 12px;
            border: 1px solid #28a745;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.15);
        }

        .success-icon {
            font-size: 60px;
            color: #28a745;
        }
    </style>
    @yield('css')
</head>

<body>
    @yield('content')

    @yield('script')
</body>

</html>
