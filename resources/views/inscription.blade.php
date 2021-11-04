<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <header>
        <h1>
            Inscription
        </h1>
    </header>
    <form action="/inscription" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="" value={{old('email')}}> <br>
        @if ($errors->has('email'))
            <p>{{$errors->first('email')}}</p>
        @endif
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" placeholder=""> <br>
        @if ($errors->has('password'))
            <p>{{$errors->first('password')}}</p>
        @endif
        <label for="password_confimation">Confirmer mot de passe</label>
        <input type="password" name="password_confirmation" placeholder=""> <br>
        <input type="submit" value="M'inscrire"> <br>
    </form>
    <footer>
        Inscription
    </footer>
</body>
</html>