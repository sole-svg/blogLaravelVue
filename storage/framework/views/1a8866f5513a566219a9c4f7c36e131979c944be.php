

<?php $__env->startSection('content'); ?>

<a class="btn btn-success mt-3 mb-3" href="<?php echo e(route('user.create')); ?>"> Crear </a>

<table class="table">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Nombre
            </td>
            <td>
                Email
            </td>
            <td>
                Rol
            </td>
            <td>
                Actualización
            </td>
            <td>
                Acciones
            </td>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($user->id); ?>

            </td>
            <td>
                <?php echo e($user->name); ?>

            </td>
            <td>
                <?php echo e($user->email); ?>

            </td>
            <td>
                <?php echo e($user->rol->key); ?>

            </td>
            <td>
                <?php echo e($user->created_at->format('d-m-Y')); ?>

            </td>
            <td>
                <?php echo e($user->updated_at->format('d-m-Y')); ?>

            </td>
            <td>
               <a href="<?php echo e(route('user.show', $user->id)); ?>" class="btn button-primary">Ver</a>
               <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn button-primary">Actualizar</a>
               <button data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($user->id); ?>" class="btn btn-danger">Eliminar</button>
            </td>
            </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

 <?php echo e($users->links()); ?> 

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Seguro que desea eliminar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form id="formDelete" method="POST" action="<?php echo e(route('user.destroy',0)); ?>" data-action="<?php echo e(route('user.destroy',0)); ?>">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>        
      </div>
    </div>
  </div>
</div>

    <script>
        window.onload = function{
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id= button.data('id')
            action = $('#formDelete').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#formDelete').attr('action',action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a borrar la categoria: ' + id)
    })}</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\larablog\resources\views/dashboard/user/index.blade.php ENDPATH**/ ?>