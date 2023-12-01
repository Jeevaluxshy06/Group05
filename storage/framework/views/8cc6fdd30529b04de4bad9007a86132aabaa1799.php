
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E-store</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('user.create')); ?>"> Entroll new Employee</a>
            </div>
        </div>
    </div>
   <br>
   <!-- success alert message -->
   <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
<?php endif; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th width="280px">Action</th>
        </tr>
        <?php ($i=0); ?>
       <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($emp->name); ?></td>
            <td><?php echo e($emp->email); ?></td>
            <td><?php echo e($emp->mobile); ?></td>
            <td><form action="<?php echo e(route('user.destroy',$emp->id)); ?>" method="POST">
            <a class="btn btn-info" href="<?php echo e(route ('user.show', $emp->id)); ?>">Show</a>
            <a class="btn btn-info" href="<?php echo e(route ('user.edit', $emp->id)); ?>">Edit</a>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
           <button type="submit" class="btn btn-danger">Delete</button>
         </form></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      

    </table>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\E-Lab Staff\Documents\2019sp090\HelloApp\resources\views/admin/addemployee.blade.php ENDPATH**/ ?>