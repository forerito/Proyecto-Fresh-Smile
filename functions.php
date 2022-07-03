Soy un mensaje secreto<!-- Por cierto, también se puede usar HTML como en todos los scripts de PHP-->
<p>
    Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
</p>
<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php">Cerrar sesión</a>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo simple de login con PHP | parzibyte.me</title>
</head>
<body>
    <!-- Se va a procesar en login.php y se enviará por POST, no por GET-->
    <form action="login.php" method="post">
        <!--
            Nota: el atributo name es importante, pues lo vamos a recibir de esa manera
            en PHP
        -->
        <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario">
        <br><br>
        <input name="palabra_secreta" type="password" placeholder="Contraseña">
        <br><br>
        <!--Lo siguiente envía el formulario-->
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>

<?php
# Las claves de acceso, ahorita las ponemos aquí
# y en otro ejercicio las ponemos en una base de datos
$usuario_correcto = "parzibyte";
$palabra_secreta_correcta = "hunter2";
/*
Para leer los datos que fueron enviados al formulario,
accedemos al arreglo superglobal llamado $_POST en PHP, y
para obtener un valor accedemos a $_POST["clave"] en donde
clave es el "name" que le dimos al input
 */
# Nota: no estamos haciendo validaciones
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
# Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    # Significa que coinciden, así que vamos a guardar algo
    # en el arreglo superglobal $_SESSION, ya que ese arreglo
    # "persiste" a través de todas las páginas
    # Iniciar sesión para poder usar el arreglo
    session_start();
    # Y guardar un valor que nos pueda decir si el usuario
    # ya ha iniciado sesión o no. En este caso es el nombre
    # de usuario
    $_SESSION["usuario"] = $usuario;
    # Luego redireccionamos a la página "Secreta"
    header("Location: secreta.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}