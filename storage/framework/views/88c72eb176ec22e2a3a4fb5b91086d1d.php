<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('img/icono.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
  <title><?php echo $__env->yieldContent('title', $title); ?></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#A9E7FB;;">
    <div class="container" style="display:flex; justify-content:center;">
      <a href="#"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="MTC" width="200px" height="170px" style="padding-left:40px;"></a>
      <h3 style="font-size:serif;">Sistema Academico</h3>
    </div>
</nav>
<div class="container">
    <div class="modal-dialog text-center">
            <?php if(session('success')): ?>
                <p class="alert alert-success"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="alert alert-danger"><?php echo e($err); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo e(asset('img/user.png')); ?>"/>
                </div>
                <form class="col-12" method="POST" action="<?php echo e(route('home')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Roberto" name="nombre_usuario" value="<?php echo e(old('usuario')); ?>">
                        <label for="floatingInput">Usuario:</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contraseña_usuario" value="<?php echo e(old('contraseña')); ?>">
                        <label for="floatingPassword">Contraseña:</label>
                    </div>
                    <br>
                    <button class="btn btn-primary">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
  Todos los derechos reservados por la autora &copy; Grupo 02 - Calidad de Software.
</footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\SistemaAcademico\resources\views/login.blade.php ENDPATH**/ ?>