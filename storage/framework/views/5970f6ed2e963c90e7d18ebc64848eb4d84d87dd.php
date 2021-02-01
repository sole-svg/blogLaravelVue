

<?php $__env->startSection('content'); ?>

<div class="form-group">
    <label for="title">Título</label>
    <input readonly class="form-control" id="title" type="text" name="title" value="<?php echo e($category->title); ?>">
</div>

<div class="form-group">
  <label for="url_clean">URL limpia</label>
  <input readonly class="form-control" id="url_clean" type="text" name="url_clean" value="<?php echo e($category->url_clean); ?>">
</div>



   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/category/show.blade.php ENDPATH**/ ?>