<?php
  require_once "clases/Crud.php";
  $crud = new Crud();
  $id = $_POST['_id'];
  $datos = $crud->obtenerDocumento($id);
  $idMongo = new \MongoDB\BSON\ObjectId($datos->_id);
  
?>
<?php require_once 'header.php'; ?>

  <div class="container bg2">
    <div class="jumbotron bg2" style="background-color: rgba(255, 255, 255, 0.6);">
    <h1 class="display-4 titulo">Eliminar registro <i class="fas fa-trash-alt"></i> </h1>
    <p class="lead">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">¡Advertenica!</h4>
            <p>¿Estas seguro de eliminar este registro?</p>
            <hr>
            <p>
              <div class="table-responsive">
                <table class="table table-hover table-sm table-bordered">
                  <thead>
                    <th class="text-center">Nombre(s)</th>
                    <th class="text-center">Apellido paterno</th>
                    <th class="text-center">Apellido materno</th>
                    <th class="text-center">Fecha de nacimiento</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $datos->nombre?></td>
                      <td><?php echo $datos->paterno?></td>
                      <td><?php echo $datos->materno?></td>
                      <td><?php echo $datos->fecha_nacimiento?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </p>
            <p class="mb-0">
              <form action="procesos/eliminar.php" method="POST">
                <input type="text" hidden name="idEliminar" value="<?php echo $idMongo; ?>">
                <a href="index.php" class="btn btn-info"> <i class="fas fa-caret-left"></i> Regresar </a>
                <button class="btn btn-danger">Eliminar <i class="far fa-trash-alt"></i> </button>
              </form>
            </p>
            
        </div>
    </p>
  </div>
</div>

<?php require_once 'scripts.php'; ?>