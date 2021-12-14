<?php
  require_once "clases/Crud.php";
  $crud = new Crud();
  $id = $_POST['idActualizar'];
  $datos = $crud->obtenerDocumento($id);
  $idMongo = new \MongoDB\BSON\ObjectId($datos->_id);
  
?>


<?php require_once "header.php"; ?>

<div class="jumbotron jumbotron-fluid bg2">
  <div class="container bg2">
    <p>
      <p class="text-right">
        <a href="index.php" class="btn btn-outline-secondary btn-sm">
          Regresar
          <span>
            <i class="fas fa-undo-alt"></i>
          </span>
        </a>
      </p>
    </p>
    <h1 class="display-4 text-center font-weight-bold bg2 titulo">Editar registro 
      <span>
        <i class="fas fa-user-edit"></i>
      </span>
    </h1>
    <p class="lead">
        <form action="procesos/actualizar.php" method="POST">

            <input type="text" name="idActualizar" hidden value="<?php echo $idMongo; ?>">

            <label class="titulo font-weight-bold" for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $datos->nombre; ?>" class="form-control" required>
            <label class="titulo font-weight-bold" for="paterno">Apellido paterno</label>
            <input type="text" name="paterno" value="<?php echo $datos->paterno; ?>" class="form-control" required>
            <label class="titulo font-weight-bold" for="materno">Apellido materno</label>
            <input type="text" name="materno" value="<?php echo $datos->materno; ?>" class="form-control" required>
            <label class="titulo font-weight-bold" for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento; ?>" class="form-control" required>
            <br>
            
            <button class="btn btn-warning btn-lg btn-block"> Actualizar
              <span>
                <i class="fas fa-user-check"></i>
              </span>
            </button>

        </form>
    </p>
  </div>
</div>  

<?php require_once "scripts.php"; ?>