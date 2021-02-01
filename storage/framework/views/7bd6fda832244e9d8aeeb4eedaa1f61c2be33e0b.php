

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('dashboard.partials.validation-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form action="<?php echo e(route('user.store')); ?>" method="POST">
  <?php echo $__env->make('dashboard.user._form', ['pasw' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/user/create.blade.php ENDPATH**/ ?>