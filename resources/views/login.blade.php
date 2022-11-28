<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')
    <h1>login</h1>
    <pre>{{ Auth::user()}}</pre>

    @foreach($errors->all() as $error)
    <li>{{ $error }} </li>
    @endforeach
    <form action="" method="post">
        @csrf
        <label><input name="text" type="email" placeholder="email"></label><br>
        <label><input name="password" type="password" placeholder="Contraseña"></label><br>
        <label><input type="checkbox" name="remember">Recuerda mi sesión</label><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>