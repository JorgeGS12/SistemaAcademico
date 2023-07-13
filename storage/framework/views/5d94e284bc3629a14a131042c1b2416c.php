<?php if(session('logged')): ?>
    

    <?php $__env->startSection('action_btn'); ?>

        <div class="header">
            <h2>Lista de cursos</h2>
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

        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                    <div class="card-body" style="text-align: left">
                        <?php $codcurso  = $curso['codigo_curso']?>
                        <?php echo e($curso['nombre_curso']); ?>

                        <?php $__currentLoopData = $bimestres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bimestre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $codbimestre  = $bimestre['codigo_bimestre']?>
                        <a href="<?php echo e(route('matricula', [$coddocente,$codcurso,$codbimestre] )); ?>" class="btn btn-success"> <?php echo e($bimestre['nombre_bimestre']); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaAcademico\resources\views/academico/curso.blade.php ENDPATH**/ ?>