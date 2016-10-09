  <html>
  <head>
    <?php include(HTML_DIR.'/overall/headerPanel.php') ?>
    <link rel="stylesheet" type="text/css" href="Views/DataTables/media/css/dataTables.bootstrap.css">
  </head>
  <body>
    <?php include(HTML_DIR.'/overall/navPanel.php') ?>
    <div id="container">
      <h2 align="center">Listado de Peliculas</h2>
      <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1"></div>
        <div class="col-xs-10 col-sm-10 col-md-10">

          <table class="table table-striped table-hover" id="PeliculasTabla" >
            <thead>
              <tr>
                <th>Portada</th>
                <th>Titula</th>
                <th>Fecha Publicación</th>
                <th>Acción</th> 
              </tr>
            </thead>
            <tbody> 
              <?php while($row = mysqli_fetch_array($datos)){ ?>
                <tr>
                  <td style="vertical-align:middle;"> 
                    <a href="<?php echo URL; ?>Admix/ver/<?php echo $row['ID']; ?>">
                      <img class="avatar" width="40px" src="<?php   echo  !empty($row['PORTADA']) ? $row['PORTADA'] : 'no-image.png'    ; ?>"> 
                    </a>
                  </td>
                  <td style="vertical-align:middle;"><?php  echo $row['TITULO_LATINO']; ?></td>
                  <td style="vertical-align:middle;"><?php  echo $row['FECHA_INGRESO']; ?></td>
                  <td style="vertical-align:middle;"><a  class="btn btn-warning" href="<?php echo URL; ?>Admix/editar/<?php echo $row['ID']; ?>">Editar</a> 
                    <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar este Integrante?','<?php echo URL; ?>Admix/eliminar/<?php echo $row['ID']; ?>')" >Eliminar</a> 
                  </td>
                </tr>
                <?php 
              }
              ?> 
            </tbody>
          </table>

        </div>
        <div class="col-xs-1 col-sm-1 col-md-1"></div>
      </div>  
    </div>
    <?php include(HTML_DIR.'/overall/footerPanel.php') ?> 
    <script type="text/javascript" src="<?php echo URL; ?>Views/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>Views/DataTables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#PeliculasTabla').DataTable({
          "iDisplayLength": -1,
          "autoWidth": true,           
          "sPaginationType": "full_numbers"
        });
      } );
    </script>
  </body>
  </html>   