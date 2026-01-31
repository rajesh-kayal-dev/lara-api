<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Registration App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/guide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>

<body>

    @include('partials.header')

    <div class="container mt-4">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Page Content --}}
        @yield('content')



    </div>
    @include('partials.footer')

    <script src="{{ asset('assets/js/guide.js') }}"></script>
    <script src="{{ asset('assets/js/landing.js') }}"></script>

</body>

</html>
