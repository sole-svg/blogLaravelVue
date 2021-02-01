

<?php $__env->startSection('content'); ?>

    <?php echo csrf_field(); ?>

<div class="form-group">
    <label for="title">Título</label>
    <input readonly class="form-control" id="title" type="text" name="title" value="<?php echo e($post->title); ?>">
    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
  <label for="url_clean">URL limpia</label>
  <input readonly class="form-control" id="url_clean" type="text" name="url_clean" value="<?php echo e($post->url_clean); ?>">
</div>

<div class="form-group">
  <label for="content" class="form-label">Contenido</label>
  <textarea readonly class="form-control" id="content" rows="3" name="content"><?php echo e($post->content); ?></textarea>
</div>


   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/post/show.blade.php ENDPATH**/ ?>