  <html>
  <head>
    <?php include(HTML_DIR.'/overall/header.php') ?>
    <link rel="stylesheet" type="text/css" href="Views/DataTables/media/css/dataTables.bootstrap.css">
  </head>
  <body>
    <?php include(HTML_DIR.'/overall/nav.php') ?>
    <div id="container">
      <h2 align="center">Profesores <i class="fa fa-exchange" aria-hidden="true"></i> Salónes</h2>
      <div class="col-xs-1 col-sm-1 col-md-1"></div>
      <div class="col-xs-10 col-sm-10 col-md-10">

        <table class="table table-striped table-hover dataTable" id="ProfesoresTabla" >
          <thead>
            <tr>
              <th></th> 
              <th>Profesor</th> 
              <th>Salón</th>
              <th>Acción</th> 
            </tr>
          </thead>
          <tbody> 
            <?php while($row = mysqli_fetch_array($datos)){ ?>
              <tr>
                <td> <a href="<?php echo URL; ?>Profesores/ver/<?php echo $row['IMAGEN']; ?>"><img class="avatar" src="<?php  echo URL; ?>HTML/Profesores/avatars/<?php echo  !empty($row['IMAGEN']) ? $row['IMAGEN'] : 'no-image.png'    ; ?>"> </a></td>
                <td><?php  echo $row['NOMBRE_PROFESOR']; ?></td>
                <td><?php  echo $row['NOMBRE']; ?></td>
                <td><a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar esta asignación?','<?php echo URL; ?>Asignar/eliminar/<?php echo $row['ID']; ?>')" >Eliminar</a> 
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
    <?php include(HTML_DIR.'/overall/footer.php') ?> 
    <script type="text/javascript" src="Views/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="Views/DataTables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.dataTable').DataTable({
          "iDisplayLength": -1,
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          "autoWidth": true,           
          "sPaginationType": "full_numbers",
          "columns": [                 
          { "orderable": false},     
          null,
          null,
          null
          ]

        });
      } );
    </script>
  </body>
  </html> 