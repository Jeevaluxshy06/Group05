
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Order Details</h2>
            </div>
        </div>
    </div>
   <br>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer mobile no</th>
            <th>Date</th>
        </tr>
        <?php ($i=0); ?>
       <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($order->name); ?></td>
            <td><?php echo e($order->detail); ?></td>
            <td><?php echo e($order->price); ?></td>
            <td><?php echo e($order->name); ?></td>
            <td><?php echo e($order->address); ?></td>
            <td><?php echo e($order->mobile); ?></td>
            <td><?php echo e($order->created_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('employee.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ctms\Downloads\assignments\HelloApp\resources\views/employee/myorder.blade.php ENDPATH**/ ?>