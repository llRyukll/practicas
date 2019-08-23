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

            <form action = "controller1/registrarEmp" method="POST"> 
    <!--           "RegistrarEmpleo" este es el nombre pueto en la ruta -->
                <table class="formulario personas">
                    <tr>
                        <th>Nombre:</th>
                        <td><input type="text" name ="nombre"></td>
                    </tr>
                    <tr>            
                        <th>Genero:</th>
                        <td><select>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><input type="text" name="edad"></td>

                    </tr>
                    <tr>
                        <th>direccion:</th>
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

</body>
</html>