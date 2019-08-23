<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">
    <meta charset="utf-8">

    <title>mostrar empleos</title>
    <style>
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
    <!--           "RegistrarEmpleo" este es el nombre pueto en la ruta -->
    <table class="formulario empresas">
        <?php foreach ($SelectEmp as $key) {        
        echo'<tr>';
            echo'<th>Empresa:</th>';
            echo'<td>'.$key->nombre_empleos.'</td>';
            echo'</tr>';
            echo'<tr>            ';
            echo'<th>Direccion:</th>';
            echo'<td>'.$key->direccion_empleos.'</td>';
            echo'</tr>';
            echo'<tr>';
            echo'<th>Tiempo:</th>';
            echo'<td>'.$key->tiempo_servicio.'</td>';
            echo'</tr>';
        }
        ?>
    </table>
    <div> 
    <input id="button" type="button" class="btn btn-info" value="Return"  onclick="location.href = 'formulario';">
    </div> 
    </div>

</body>
</html>
