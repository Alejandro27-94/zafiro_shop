<?php

include("con_db.php");


$cc = trim( $_POST['valorCedula']);
$nombre = $_POST['valorNombre'];
$cel = $_POST['valorCel'];
$correo = $_POST['valorCorreo'];
$direccion = $_POST['valorDireccion'];
$select = $_POST['valorCiudad'];

$consulta = "INSERT INTO cliente(cc, nombre, cel, correo, direccion, ciudad) VALUES ('$cc','$nombre','$cel','$correo','$direccion','$select')";

$resultado = mysqli_query($conex,$consulta);
if($resultado){
    ?>
    <h3 class="ok" > Tus datos para entregas se han registrado</h3>
<?php
}else{?>
    <h3 class="ups" > Tus datos para entregas NO SE REGISTRARON <br> intenta nuevamente </h3>
<?php
}


?>





