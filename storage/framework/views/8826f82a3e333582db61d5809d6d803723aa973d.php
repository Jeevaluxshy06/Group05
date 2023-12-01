
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E-store</h2>
            </div>
        </div>
    </div>
   <br>
  
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th width="280px">Actions</th>
        </tr>
        <?php ($i=0); ?>
       <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($orders->name); ?></td>
            <td><?php echo e($orders->detail); ?></td>
            <td><?php echo e($orders->price); ?></td>
            <td>
            <a class="btn btn-info" href="<?php echo e(route('ord', $orders->id)); ?>">Place Order</a>
           </td> 
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      

    </table>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('customer.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ctms\Downloads\assignments\HelloApp\resources\views/customer/placeorder.blade.php ENDPATH**/ ?>