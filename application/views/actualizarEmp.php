<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <TITLe>Formulario de empleos</TITLe>
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

            <form action = "../updateEmp" method="POST">
                <table class="formulario empleos">
                    <?php //Esta es otra forma deimprimir los datos traidos por una variable
                    foreach ($datos as $dt) {
                        echo'<tr><td>ID: <input type="text" name ="id" value="'.$dt->id_empleos.'"></td></tr>';
                        echo'<tr><td>Nombre: <input type="text" name ="nombre" value="'.$dt->nombre_empleos.'"></td></tr>';
                        echo'<tr><td>Direccion: <input type="text" name ="direccion" value="'.$dt->direccion_empleos.'"></td></tr>';
                        echo'<tr><td>Tiempo: <input type="text" name ="tiempo" value="'.$dt->tiempo_servicio.'"></td></tr>';
                    }
                    ?>
                </table><br>
                <p> <input type="submit" class="btn btn-info" value="Actualizar"> </p>
            </form>
        <div> 
            <input id="button" type="button" value="Return"  onclick="location.href = '../mostrarEmp';">
        </div> 

</body>
</html>