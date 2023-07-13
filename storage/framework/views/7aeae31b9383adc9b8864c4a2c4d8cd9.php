<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/tabla.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fondo.css')); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('img/icono.ico')); ?>">
    <script src="<?php echo e(asset('js/navbaraction.js')); ?>"></script>
    <script src="https://kit.fontawesome.com/55312b8204.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title><?php echo $__env->yieldContent('title', $title); ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#A9E7FB;;">
      <a href="#"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="MTC" width="200px" height="170px" style="padding-left:40px;"></a>
        <div class="container" style="display:flex; justify-content:center;">
          <h3 style="font-size:serif;">Sistema Academico</h3>
        </div>
    </nav>
    <?php if(session('logged')): ?>
    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <li><a href="#"><i class="fa-solid fa-user"></i> <?php echo e($datos); ?></a></li>
                <li><a href="<?php echo e(route('cursos', $coddocente)); ?>"><i class="fa-solid fa-book"></i> Cursos</a></li>
                <li><a href="<?php echo e(route('logout')); ?>"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a></li>
            </ul> 
        </div>
        <div class="main_content">
            <?php echo $__env->yieldContent('action_btn'); ?>
        </div>
    </div>
    <?php else: ?>
        <a href="<?php echo e(route ('/')); ?>" class="btn btn-danger">POR FAVOR, INICIA SESION</a>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\SistemaAcademico\resources\views/home.blade.php ENDPATH**/ ?>