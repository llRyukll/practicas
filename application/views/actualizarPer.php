<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <TITLe>Formulario de Personas</TITLe>
    <style>
        #tit{
            border: 1px solid black;
        }
        #button{
            position: relative;
            left: 93%;
            right: 0%;
            top: 0%;
        }
    </style>

</head>
    <body >
        <div class="container" style="background-color:#AFEEEE">

            <form action = "../updatePer" method="POST">
                <table class="formulario personas">
                    <?php //Esta es otra forma deimprimir los datos traidos por una variable
                    foreach ($datos as $dt) {
                        echo'<tr><td>ID: <input type="text" id="cantidad" name ="id" value="'.$dt->id_personas.'" readonly maxlength="4"></td></tr>';
                        echo'<tr><td>Nombre: <input type="text" name ="nombre" value="'.$dt->nombre_personas.'"></td></tr>';
                        echo'<tr><td>Genero:<select name="genero">
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select></td></tr>';
                        echo'<tr><td>Edad: <input type="text" name ="edad" value="'.$dt->edad_personas.'" onKeyUp= javascript:validarSiNumero(this.value) maxlength="2" ></td></tr>';
                        echo'<tr><td>Direccion: <input type="text" name ="direccion" value="'.$dt->direccion_personas.'"></td></tr>';
                    }
                    ?>
                <!-- <table class="formulario personas">  Otra opcion ed como amndar infomracion
                    <tr>
                        <th>ID:</th>
                        <td><input type="text" name ="id" value="<?php echo $datos[0]->id_personas; ?> "></td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td><input type="text" name ="nombre" value="<?php echo $datos[0]->nombre_personas; ?> "></td>
                    </tr>
                    <tr>            
                        <th>Genero:</th>
                        <td><select name="genero" value="<?php echo $datos[0]->genero_personas; ?> ">
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><input type="text" name="edad" value="<?php echo $datos[0]->edad_personas; ?> " onChange ="javascript:validarSiNumero(this.value) maxlength="2" ></td>

                    </tr>
                    <tr>
                        <th>direccion:</th>
                        <td><input type="text" name="direccion" value="<?php echo $datos[0]->direccion_personas; ?> "></td>

                    </tr>
                </table><br> -->
                </table><br>
                <p> <input type="submit" class="btn btn-info" id="actualizarb" value="Actualizar"> </p>
            </form>
        <div> 
            <input id="button" type="button" class="btn btn-info" value="Return"  onclick="location.href = '../mostrarPer';">
        </div> 

</body>
</html>
    <script>
      function validarSiNumero(numero){
        if (!/^([0-9])*$/.test(numero))
            return false
            // var boton = document.getelementbyid('actualizarb');
            // boton.style.display='none';

      }
    </script>