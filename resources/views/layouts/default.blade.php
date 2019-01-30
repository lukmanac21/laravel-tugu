<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div>
        @include('includes.header')
    </div>
        @include('includes.sidebar')

    <div class="main-content">
            @yield('content')
    </div>

        @include('includes.js')

</body>
</html>