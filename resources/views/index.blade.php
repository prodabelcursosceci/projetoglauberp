<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index 1</title>
</head>
<body>
    <div style="color: red;">
        {{$ola}}
    </div>
    <div style="color: red;">
        {{$ola}}
    </div>
    <div style="color: red;">
        @forelse ($errors as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
            @empty
                <p>Funcionou</p>
        @endforelse
    </div>
    <form action="" method="post">
        @csrf
        <input type="text" name="telefone" id="telefone">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>