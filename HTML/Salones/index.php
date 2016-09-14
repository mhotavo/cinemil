  <html>
  <head>
    <?php include(HTML_DIR.'/overall/header.php') ?>
    <link rel="stylesheet" type="text/css" href="Views/DataTables/media/css/dataTables.bootstrap.css">
  </head>
  <body>
    <?php include(HTML_DIR.'/overall/nav.php') ?>
    <div id="container">
      <h2 align="center">Salónes</h2>

      <div class="col-xs-1 col-sm-1 col-md-1"></div>
      <div class="col-xs-10 col-sm-10 col-md-10">
        <table class="table table-striped table-hover dataTable" >
          <thead>
            <tr>
              <th>Número</th>
              <th>Nombre</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody> 
            <?php while($row = mysqli_fetch_array($datos)){ ?>
              <tr>
                <td><?php  echo $row['NUMERO']  ?></td>
                <td><?php  echo $row['NOMBRE']; ?></td>
                <td><a  class="btn btn-warning" href="<?php echo URL; ?>Salones/editar/<?php echo $row['ID_SALON']; ?>">Editar</a> 
                  <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar este salón?','<?php echo URL; ?>Salones/eliminar/<?php echo $row['ID_SALON']; ?>')" >Eliminar</a> 
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
          "columns": [
          { "width": "2%" },
          null,
          { "width": "20%", "orderable": "false"}
          ],
          "sPaginationType": "full_numbers",
          "order": [[ 0, 'asc' ]]
        });
      } );
    </script>
  </body>
  </html> 