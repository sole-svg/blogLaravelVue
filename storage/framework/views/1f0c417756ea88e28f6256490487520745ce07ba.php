
    <?php echo csrf_field(); ?>

<div class="form-group">
<label for="name">Nombre</label>
<input class="form-control" id="name" type="text" name="name" value="<?php echo e(old('name', $user->name)); ?>">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" id="email" type="email" name="email" value="<?php echo e(old('email', $user->email)); ?>">
</div>

<?php if($pasw): ?>
<div class="form-group">
    <label for="password">Contraseña</label>
    <input class="form-control" id="password" type="password" name="password" value="<?php echo e(old('password', $user->password)); ?>">
</div>
<?php endif; ?>


<input type="submit" value="Enviar" class="btn btn-primary">
    

<?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/user/_form.blade.php ENDPATH**/ ?>