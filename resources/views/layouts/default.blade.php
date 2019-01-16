<html>
<head>
    <title>@yield('title', 'Weibo App') - The First Time TO Do It!</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
@include('layouts._header')

<div class="container">
    <div style="margin-top: 20px;" class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>