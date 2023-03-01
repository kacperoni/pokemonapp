<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokemonApp</title>

    <!-- Custom style link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Google fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <h1 class="nav-header">
                PokeApp
            </h1>
            <ol class="nav-links">
                <li>
                    <a href="#">Pokemons</a>
                </li>
                <li>
                    <a href="#">Types</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ol>
            <div class="dropdown">
                <a href="#" class="user-button">Username</a>
                <ol>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                    <li>
                        <a href="#">Logout</a>
                    </li>
                </ol>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>