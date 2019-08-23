<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <meta charset="utf-8">

    <title>Formulario de empleos</title>
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
    <form action = "controller1/registrarEmp" method="POST">
    <!--           "RegistrarEmpleo" este es el nombre pueto en la ruta -->
    <table class="formulario empresas">
        <tr>
            <th>Empresa:</th>
            <td><input type="text" name ="empresa"></td>
        </tr>
        <tr>            
            <th>Tiempo:</th>
            <td><input type="text" name ="tiempo"></td>
        </tr>
        <tr>
            <th>Direccion:</th>
            <td><input type="text" name="direccion"></td>

        </tr>
        <td>
        <input type="submit">
        <p>    <input type="button" class="btn btn-info" value="MostrarDatos" onclick="location.href = 'mostrarEmp';">
        </p>
        </td>

    </table>
    </form>
    <div> 
    <input id="button" type="button" class="btn btn-info" value="Return"  onclick="location.href = 'formulario';">
    </div> 
    </div>

</body>
</html>
