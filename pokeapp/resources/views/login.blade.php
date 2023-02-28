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

</head>
<body>
    <main>
        <div class="container">
            <div class="left">
            </div>
            <div class="right">
                <p class="register-link">Not a member? <a href="{{route('register')}}">Register now</a></p>
                <h1>WELCOME</h1>
                <form>
                    <input class="input" type="text" placeholder="Enter username">
                    <input class="input" type="password" placeholder="Password">
                    
                    <input class="button" type="submit" value="Sign In">
                </form>
                <p class="recovery-password"><a href="">Recovery Password</a></p>
            </div>
        </div>
    </main>
</body>
</html>