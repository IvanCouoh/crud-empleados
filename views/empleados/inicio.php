<a name="" id="" class="btn btn-outline-primary" href="?controller=empleados&action=crear" role="button">Agregar empleado</a>
<tr>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>FECHA INGRESO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empleados as $empleado) { ?>
        <tr>
            <td> <?php echo $empleado->id;?> </td>
            <td> <?php echo $empleado->nombre;?> </td>
            <td> <?php echo $empleado->correo;?> </td>
            <td> <?php echo $empleado->fecha;?></td>
            
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controller=empleados&action=editar&id=<?php echo $empleado->id;?>" class="btn btn-outline-warning">Editar registro</a>
                 <a href="?controller=empleados&action=borrar&id=<?php echo $empleado->id;?>" class="btn btn-outline-danger">Borrar registro</a>

                
            </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
