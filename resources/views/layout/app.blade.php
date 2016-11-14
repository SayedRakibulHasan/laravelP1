<html>
    <head>
        <title>simple_layout - @yield('title')</title>
</head>
<body>
@section('sidebar')
    this is from app.blade page.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>