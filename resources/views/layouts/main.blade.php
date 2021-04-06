<html>
<head>
<meta charset="UTF-8">
<title>Kanidtha's Controllers - @yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
</head>
<body>
    <header>
        <h1>  @yield('title')</h1>
        
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&#xA9; Copyright Week-06, 2020 Kanidtha's controllers.</p>
    </footer>
</body>
</html>