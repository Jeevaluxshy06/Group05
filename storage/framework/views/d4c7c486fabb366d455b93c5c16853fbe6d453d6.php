
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit an Employee</h2>
        </div>
        <div class="pull-right">
           
        </div>
    </div>
</div>
<!-- error messages --> 
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('user.update',$user)); ?>" method="post" style="margin-left:150px ; margin-right:150px; ">
<?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" placeholder="Name" name="name" value=<?php echo e($user->name); ?>>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" class="form-control" placeholder="email" name="email" value=<?php echo e($user->email); ?>>
            </div>
        </div>
        
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong><label for="inputname" class="col-xs-12 col-sm-12 col-md-12">Gender:</label></strong>
            <?php echo e($user->gender); ?>

  <select name="gender" class="form-select" aria-label="Default select example"> 
  <option selected disabled></option>
  <option value="M">M</option>
  <option value="F">F</option>
</select></div>
</div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" class="form-control" placeholder="address" name="address" value=<?php echo e($user->address); ?>>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile No:</strong>
                <input type="text" class="form-control" placeholder="mobile" name="mobile" value=<?php echo e($user->mobile); ?>>
            </div>
        </div>
       <!--
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" class="form-control" placeholder="password" name="password" value=<?php echo e($user->password); ?>>
            </div>
        </div> -->
        
         <input type="hidden" name="role" value="employee">  
    <br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\E-Lab Staff\Documents\2019sp090\HelloApp\resources\views/employee/edit.blade.php ENDPATH**/ ?>