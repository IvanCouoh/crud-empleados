<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="?controller=empleados&action=crear" role="button">Agregar empleado</a>
    </div>
    <div class="card-body">
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
                                <a href="?controller=empleados&action=editar&id=<?php echo $empleado->id;?>" class="btn btn-warning" id=edit style= margin-left="2px">Editar</a>
                                <a href="?controller=empleados&action=borrar&id=<?php echo $empleado->id;?>" class="btn btn-danger">Borrar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>