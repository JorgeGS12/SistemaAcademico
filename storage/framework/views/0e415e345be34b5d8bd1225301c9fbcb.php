<?php if(session('logged')): ?>
    

    <?php $__env->startSection('action_btn'); ?>

        <div class="header">
            <h2>Registro de Notas</h2>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="alert alert-danger"><?php echo e($err); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-title">Docente: <?php echo e($datos); ?></h4>
                <h5 class="card-subtitle mb-2 text-muted">Bimestre: <?php echo e($nombimestre); ?></h6>
                <h5 class="card-subtitle mb-2 text-muted">Curso: <?php echo e($nomcurso); ?></h6>
                <h5 class="card-subtitle mb-2 text-muted">Grado: <?php echo e($nomgrado); ?></h6>
            </div>
          </div>
        <!-- Lista de Alumno -->
          <div class="info">
            <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Apellidos y Nombres</th>
                            <th>Examen Escrito</th>
                            <th>Examen Oral</th>
                            <th>Exposición</th>
                            <th>Practica</th>
                            <th>Tarea</th>
                            <th>Promedio Final</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                        <form action="<?php echo e(route('registro')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <tr>
                                <th style="display: none">
                                    <input type="text" class="form-control" name="codigo_bimestre" value="<?php echo e($codbimestre); ?>">
                                </th>
                                <th style="display: none">
                                    <input type="text" class="form-control" name="codigo_curso" value="<?php echo e($codcurso); ?>">
                                </th>
                                <th style="display: none">
                                    <input type="text" class="form-control" name="codigo_alumno" value="<?php echo e($nota->codigo_alumno); ?>">
                                </th>
                                <th>
                                    <p><?php echo e($nota->apellido1_alumno." ".$nota->apellido2_alumno.", ".$nota->nombre1_alumno." ".$nota->nombre2_alumno); ?></p>
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_examenescrito" value="<?php echo e($nota->nota_examenescrito); ?>">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_examenoral" value="<?php echo e($nota->nota_examenoral); ?>">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_exposicion" value="<?php echo e($nota->nota_exposicion); ?>">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_practica" value="<?php echo e($nota->nota_practica); ?>">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_tarea" value="<?php echo e($nota->nota_tarea); ?>">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="promedio_final" value="<?php echo e($nota->promedio_final); ?>" disabled>
                                </th>
                                <td colspan="2">
                                    <button class="btn btn-primary">Guardar</button>
                                </td>
                            </tr>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
            </table>
    </div>

    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaAcademico\resources\views/academico/nota.blade.php ENDPATH**/ ?>