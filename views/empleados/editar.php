<div class="card">
    <div class="card-header">
        Editar datos de usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
        
        <div class="mb-3">
          <label for="id" class="form-label" >ID</label>
          <input readonly type="text" 
            class="form-control"  value="<?php echo $empleado-> id ?>"name="id" id="id" aria-describedby="helpId" placeholder="ID empleado">
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input required type="text"
            class="form-control"  value="<?php echo $empleado-> nombre ?>"   name="nombre" id="nombre" aria-describedby="helpId" placeholder="Agregar el nombre del empleado">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico:</label>
          <input required type="email" class="form-control" value="<?php echo $empleado-> correo ?>" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Agregar el correo del empleado">
        </div>

        <div class="mb-3" style="display:none">
        <?php
        date_default_timezone_set('America/Mexico_city');
        $fecha_actual=date("Y-m-d");
        ?>
          <label for="fecha de ingreso" class="form-label">Fecha de ingreso:</label>
          <input type="datetime" name="fecha" value="<?= $fecha_actual?>">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
        <a href="?controller=empleados&action=inicio" class="btn btn-danger" > Cancelar </a>
        </form>
    </div>
    
</div>