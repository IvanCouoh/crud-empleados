<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="?controller=empleados&action=crear" role="button">Agregar empleado</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead style="text-align: center;">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>FECHA INGRESO</th>
                    <th>ACCIONES</th>
                    <th>CARTA DE RECOMENDACIÓN</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php foreach ($empleados as $empleado) { ?>
                    <tr>
                        <td> <?php echo $empleado->id; ?> </td>
                        <td> <?php echo $empleado->nombre; ?> </td>
                        <td> <?php echo $empleado->correo; ?> </td>
                        <td> <?php echo $empleado->fecha; ?></td>
                        <td>
                            <div class="" role="group" aria-label="">
                                <a href="?controller=empleados&action=editar&id=<?php echo $empleado->id; ?>" class="btn btn-warning" id=edit style="margin-right: 10px;">Editar</a>
                                <a href="?controller=empleados&action=borrar&id=<?php echo $empleado->id; ?>" class="btn btn-danger">Borrar</a>
                            </div>
                        </td>
                        <td>
                            <a href="?controller=empleados&action=carta&id=<?php echo $empleado->id; ?>" class="btn btn-primary" style="width: 80%;">Generar carta</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>