<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <form action="/contacto-recibe" method="POST">
        @csrf

        <label for="Nombre">
            Nombre:<br><input type="text" name="nombre" id="name" value="{{$nombre}}">
        </label> <br>
        <label for="Correo">
            Correo:<br><input type="email" name="correo" id="email" value="{{$correo}}">
        </label> <br>
        <label for="Comentario">
            Comentario:<br><textarea name="comentario" cols="30" rows="3" id="comment"></textarea>
        </label> <br>
        
        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>