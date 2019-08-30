<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">
    <meta charset="utf-8">
    <script src="<?php echo base_url?>"></script>

    <title>mostrar personas</title>
    <style>
        #button{
            position: relative;
            left: 91%;
            right: 0%;
            top: 0%;
        }

    </style>

</head>
<body >
    <div class="container" style="background-color:#AFEEEE">
    <!--           "RegistrarPersonas" este es el nombre puesto en la ruta -->
    <table class="formulario personas">
        <thead>
            <tr> 
                <th>ID</th>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Edad</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($SelectPer as $key) {        
            echo'<tr>';
            echo'<td>'.$key->id_personas.'</td>';
            echo'<td>'.$key->nombre_personas.'</td>';
            echo'<td>'.$key->genero_personas.'</td>';
            echo'<td>'.$key->edad_personas.'</td>';
            echo'<td>'.$key->direccion_personas.'</td>';
            echo'<td><a type="button" class="btn btn-danger" href ="deletePer/'.$key->id_personas.'">Eliminar</a></td>';
            echo'<td><a type="button" class="btn btn-info" href ="actualizarPersona/'.$key->id_personas.'">Actualizar</a></td>';
            echo'</tr>';
        }
        ?>
    </table>
        <input id="button" type="button" class="btn btn-info" value="Return"  onclick="location.href = 'personas';">

    </div> 
</body>
</html>
