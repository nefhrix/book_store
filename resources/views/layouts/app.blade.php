<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>



<body>
    <header>
        <!-- nav menu -->
        <nav>
            <ul>
                <li><a href="{{ route('books.index') }}">My books</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- this is where the content of the child views -->
    </main>

    <footer>

    </footer>    
</body>

</html>