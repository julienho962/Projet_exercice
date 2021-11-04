<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>utilisateurs</title>
</head>
<body>
    <header>
        <h1>
            Les Utilisateurs
        </h1>
    </header>
    <div>
        <ol>
            @foreach ($utilisateurs as $user)
                <li> {{$user->email}} </li>
            @endforeach
        </ol>
    </div>
    <footer>
        les utilisateurs
    </footer>
</body>
</html>