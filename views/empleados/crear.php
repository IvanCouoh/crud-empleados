<div class="card">
    <div class="card-header">
        Ingresar nuevo empleado
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Agregar el nombre del empleado">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico:</label>
          <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Agregar el correo del empleado">
        </div>

        <div class="mb-3" style="display:none">
        <?php
        date_default_timezone_set('America/Mexico_city');
        $fecha_actual=date("d-m-Y");
        ?>
          <label for="fecha de ingreso" class="form-label">Fecha de ingreso:</label>
          <input type="datetime" name="fecha" value="<?= $fecha_actual?>">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Ingresar empleado">
        </form>
    </div>
    <div class="card-footer text-muted">
        Todos estos datos son protegidos, <por class=""></por>
    </div>
</div>