<?php

if(isset($_POST['enviarComentario'])) {
    if (strlen($_POST['valorNombre']) >=1 &&  
        strlen($_POST['valorNumero']) >=1 && 
        strlen($_POST['correo']) >=1 && 
        strlen($_POST['valorFecha']) >=1 && 
        strlen($_POST['valorComentario']) >=1 ) {
            $name = trim($_POST ['valorNombre']);
            $num = trim($_POST ['valorNumero']);
            $email = trim($_POST ['correo']);
            $date = date($_POST ['valorFecha']);
            $coment = trim($_POST ['valorComentario']);
            $query = "INSERT INTO `comentarios_form`(nombre, num_cel, correo, fecha, comentario) VALUES ('$name','$num','$email','$date','$coment')";
            $resul = mysqli_query($conex,$query);

        }

        }

        
        

 ?>