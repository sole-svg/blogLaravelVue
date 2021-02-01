

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Martinez seguros</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        CRUD
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo e(route('post.index')); ?>">Post</a>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="<?php echo e(route('user.index')); ?>">Usuario</a>
       <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo e(route('category.index')); ?>">Categorias</a>      
      </div>
    </li>
  </ul>

<ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('logout')); ?>"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       <?php echo e(__('Logout')); ?>

   </a>

   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
       <?php echo csrf_field(); ?>
   </form>
    </li>
  </ul>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Perfil</a></li>
        </ul>
      </li>
    </ul>
</div>
</nav><?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/partials/nav-header-main.blade.php ENDPATH**/ ?>