<!DOCTYPE html>
<html>
<head>
  <title>modal</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <script rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</head>



<body>
<!-- Button trigger modal -->
  <a id="busquedabutton" data-toggle="modal"  href="#modalWPS" class="btn btn-primary btn-lg active" type="button">Ver WPS</a>

<!-- Modal -->
          <div id="modalWPS" class="modal fade in">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>WPS correspondiente</h3>
                </div>
                 <div class="modal-body">
                    <div id="PDF">
                      <form action="<?php echo base_url(); ?>AgregarWPS" method="POST" enctype="multipart/form-data">
                      <?php
                      foreach($verOMS as $oms){
                        $ID = $oms->idPDF;
                      }
                        if(isset($myWPS)){
                        $FechaOriginal = $oms->fechaAgregadaWPS;
                        $FechaActual = date("Y-m-d H:i", time());
                echo  '<table border="0">
                        <tbody>
                            <div>

                              <tr> <th>Numero Parte: </th> <td><h3>'.$oms->WPS.'</h3></td> <th>  Ultima fecha modificado: </th> <td><input hidden name="fechaCargaWPS" value="'.$FechaActual.'"/><h3>'.$FechaOriginal.'</h3></td> <tr> 
                              <tr><td><button type="submit" >Update<td> <td><h4>Actualizar archivo OMS: </h4></td><td><input type="file" id="file_PDF" name="userfile" accept="application/pdf" /></td><tr>
                              <input hidden name="idOMS" value="'.$oms->idPDF.'">
                              <input hidden name="nameWPS" value="'.$oms->WPS.'">
                               
                            </div>
                        </tbody>
                    </table>';
                          echo '<iframe style="border:none;" src="'.$myWPS.'#zoom=80%" height="800" width="100%"></iframe>';
                        }
                        else{
                          $data = date("Y-m-d H:i", time());
                          echo '<h3>La OMS no cuenta con WPS en este momento</h3>';
                          echo '<br>';
                          echo '<h4>Asignar WPS</h4>';
                          echo '<br>';
                            echo '<input hidden name="idOMS" value="'.$ID.'"/>';
                            echo '<input hidden name="fechaCargaWPS" value="'.$data.'"/>';
                            echo '<input type="file" id="file_PDF" name="userfile" accept="application/pdf" />';
                            echo '<button type="submit" class="btn btn-secondary">Guardar WPS</button>';
                        }
                      ?>
                    </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
              </div>
            </div>
          </div>
        </div>

</body>
</html>