
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('order.store')); ?>" method="post" style="margin-left:150px ; margin-right:150px; ">
<?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <?php echo e($product->name); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12"></div>
        <label for="employee" class="col-xs-12 col-sm-12 col-md-12"><strong>Employee Name : </strong></label>
        <div class="col-sm-4">
        <select name="employee_id" class="form-select"  aria-label="Default select example" required>
            <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div>
           

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <?php echo e($product->price); ?>

            </div>
        </div>
        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
        <input type="hidden" name="customer_id" value="<?php echo e(Auth::user()->id); ?>">

        <div class="col-auto">
  <center>  <button type="submit"  class="btn btn-primary mb-3" >Order</button></center>
  </div>
 
    </div>
    </form> 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ctms\Downloads\assignments\HelloApp\resources\views/customer/order.blade.php ENDPATH**/ ?>