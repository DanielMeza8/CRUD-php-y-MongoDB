
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
    <h1 class="display-4 text-center font-weight-bold bg2 titulo"> Agregar registro
      <span>
        <i class="fas fa-user-circle"></i>
      </span>
    </h1>
    <p class="lead">
        <form action="procesos/agregar.php" method="POST">
            <label class="titulo font-weight-bold" for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label class="titulo font-weight-bold" for="paterno">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required>
            <label class="titulo font-weight-bold" for="materno">Apellido materno</label>
            <input type="text" name="materno" class="form-control" required>
            <label class="titulo font-weight-bold" for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>

            <button class="btn btn-primary btn-lg btn-block"> Ingresar
              <span>
                <i class="fas fa-user-plus"></i>
              </span>
            </button>
              
        </form>
    </p>
  </div>
</div>   

<?php require_once "scripts.php"; ?>