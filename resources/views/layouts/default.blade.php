<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header class="header">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        @yield('content')
    </div>
    <footer class="footer">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
