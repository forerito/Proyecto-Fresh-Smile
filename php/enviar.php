<?php
include 'registrardatos.php';

$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$clave = $_POST['clave'];

$query="INSERT INTO registro (nombre,identificacion,telefono,email,clave)
 VALUES ('$nombre','$identificacion', '$telefono','$email','$clave')";


$ejecutar=mysqli_query($conexion,$query);

// echo'<script type="text/javascript">
//         alert("registro guardado");
//         window.location.href="registro.php";
//         </script>';

// if($ejecutar){

//     echo '
//     <script>
//     alert("registro exitoso");
//     window.location = "../registro.php";
//     </script>

//     ';

// }else{

//     echo'
//     <script>
//     alert('error de registro');
//     window.location = "../registro.php";
//     </script>
//     ';
// }

?>




