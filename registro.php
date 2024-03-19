<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registro Zafiro Motos</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="../proyecto_SO_Zfr/img/logoZafiroPNG.png" type="image/x-icon">
</head>

<body>


     


	<div>

        <form  action="login.php" class="text-center" id="form_registro" method="post">

        <h1>REGISTRATE</h1>
        <h3>Asi podremos enviar tu producto a la puerta de tu casa</h3>


            *CC
            <br>
            <input type="int" name="valorCedula" placeholder="Cedula de ciudadania" required>
            <br>
            *Nombre
            <br>
            <input type="text" name="valorNombre" placeholder="Nombre completo" required>
            <br>
            *cel
            <br>
            <input type="text" name="valorCel" placeholder="Celular" required>
            <br>
            Correo
            <br>
            <input type="email" name="valorCorreo" placeholder="Email">
            <br>
            *Dirección
            <br>
            <input type="text" name="valorDireccion" placeholder="dirección entrega" required>
            <br>
            *Ciudad
            <br>            
            <label for="elegir"></label>
            <select name="ciudad" id="elegir">

                                            <option value="Arauca">Arauca</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Bogotá">Bogotá</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Cali">Cali</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="Cúcuta">Cúcuta</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Ibagué">Ibagué</option>
                                            <option value="Leticia">Leticia</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Medellín">Medellín</option>
                                            <option value="Mitú">Mitú</option>
                                            <option value="Mocoa">Mocoa</option>
                                            <option value="Montería">Montería</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Popayán">Popayán</option>
                                            <option value="Puerto Carreño">Puerto Carreño</option>
                                            <option value="Puerto Inírida">Puerto Inírida</option>
                                            <option value="Quibdó">Quibdó</option>
                                            <option value="Riohacha">Riohacha</option>
                                            <option value="San Andrés">San Andrés</option>
                                            <option value="San José del Guaviare">San José del Guaviare</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Sincelejo">Sincelejo</option>
                                            <option value="Tunja">Tunja</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Yopal">Yopal</option>
                                        </select>

            <br>
			<BR></BR>
            <input class="enviar" type="submit" name="registrarme">
        </form>

       

        



    </div>

    
    

    <br>
    <br>
    <br>
        <a href="../proyecto_SO_Zfr/index.html" target="_blank">Volver</a>
</body>




</html>