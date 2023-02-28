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
                <p class="register-link">Already have an account? <a href="{{route('login')}}">Login</a></p>
                <h1>Register</h1>
                <form>
                    <input class="input" name="username" type="text" placeholder="Enter username">
                    <input class="input" name="email" type="text" placeholder="Enter email">
                    <input class="input" type="password" placeholder="Password">
                    <input class="input" type="password" placeholder="Confirm Password">
                    
                    <input class="button" type="submit" value="Sign up">
                </form>
            </div>
        </div>
    </main>
</body>
</html>