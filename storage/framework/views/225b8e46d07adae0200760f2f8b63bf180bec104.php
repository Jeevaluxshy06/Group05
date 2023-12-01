
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E-store</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="#"> Create New Product</a>
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
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        
        <?php ($i=0); ?>
        <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->detail); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><form action="<?php echo e(url('admin.add')); ?>" method="POST">
            <a class="btn btn-info" href="<?php echo e(route('admin.show')); ?>">Show</a>
            <a class="btn btn-info" href="<?php echo e(route('admin.edit')); ?>">Edit</a>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
           <button type="submit" class="btn btn-danger">Delete</button>
         </form></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ctms\Downloads\assignments\HelloApp\resources\views/admin/create.blade.php ENDPATH**/ ?>