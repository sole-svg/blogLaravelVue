
  <?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="alert alert-danger">
    <?php echo e($error); ?>

  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/partials/validation-error.blade.php ENDPATH**/ ?>