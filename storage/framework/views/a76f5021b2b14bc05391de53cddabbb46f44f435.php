
    <?php echo csrf_field(); ?>

<div class="form-group">
<label for="title">Título</label>
<input class="form-control" id="title" type="text" name="title" value="<?php echo e(old('title', $category->title)); ?>">


</div>
<div class="form-group">
<label for="url_clean">URL limpia</label>
<input class="form-control" id="url_clean" type="text" name="url_clean" value="<?php echo e(old('url_clean', $category->url_clean)); ?>">
</div>

<input type="submit" value="Enviar" class="btn btn-primary">
    

<?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/category/_form.blade.php ENDPATH**/ ?>