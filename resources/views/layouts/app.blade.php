<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <h2>Header</h2>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h2>Footer</h2>
    </footer>


    
</body>
</html>