<?php
  session_start();
  require_once "clases/Crud.php";
  $obj = new Crud();
  $datos = $obj->mostrar();
  $mensaje = @$obj->mensajesCrud($_SESSION['mensaje_crud']);
  unset($_SESSION['mensaje_crud']);
  //echo "<pre>";
    //print_r($datos);
  //echo "</pre>";  
?>




<?php require_once "header.php"; ?>

<div class="jumbotron bg">
  <div class="container" style="background-color: rgba(255,255,255,0.3);">
    <h1 class="display-4">
      <p class="text-center font-weight-bold titulo2">CRUD con PHP y MONGO
        <span>
          <i class="fab fa-uncharted"></i>
        </span>
      </p>  
    </h1>
    <p class="lead">
      <a href="agregar.php" class="btn btn-primary">Agregar persona
        <span>
        <i class="fas fa-user-plus"></i>
        </span>
      </a>
        <hr>
        <div class="table-responsive">
          <table class="table table-striped table-hover table-sm table-bordered" id="datatableMongo">
            <thead class="thead-light">
              <th class="text-center">Nombre</th>
              <th class="text-center">Apellido paterno</th>
              <th class="text-center">Apellido materno</th>
              <th class="text-center">Fecha de nacimiento</th>
              <th class="text-center">Editar</th>
              <th class="text-center">Eliminar</th>
            </thead>
            <tbody>
              <?php 
                foreach($datos as $key): 
                  $idMongo = new MongoDB\BSON\ObjectId($key->_id);
              ?>  
                <tr class="bg3"> 
                  <td class="font-weight-normal"><?php echo $key->nombre; ?></td>
                  <td class="font-weight-normal"><?php echo $key->paterno; ?></td>
                  <td class="font-weight-normal"><?php echo $key->materno; ?></td>
                  <td class="font-weight-normal"><?php echo $key->fecha_nacimiento; ?></td>
                  <td class="text-center">
                    <form action="actualizar.php" method="POST">
                      <input type="text" name="idActualizar" hidden value="<?php echo $idMongo ?>">
                      <button class="btn btn-warning">Editar
                        <span>
                          <i class="fas fa-user-edit"></i>
                        </span> 
                      </button>
                    </form>
                  </td>
                  <td class="text-center">
                    <form action="eliminar.php" method="POST">
                      <input type="text" name="_id" hidden value="<?php echo $idMongo?>"> 
                      <button class="btn btn-danger">Eliminar
                    
                        <span>
                          <i class="fas fa-user-times"></i>
                        </span>
                    
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>  
            </tbody>
          </table>
        </div>
    </p>
  </div>
</div>


<?php require_once "scripts.php"; ?>

<script>
  let mensaje = <?php echo $mensaje; ?>;
  console.log(mesaje);
</script>