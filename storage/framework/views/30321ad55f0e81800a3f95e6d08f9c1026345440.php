
<?php $__env->startSection('content'); ?>

<html>
    <body>
      <div >
<center><h1 style="background-color:#0d6efd;margin-left:300px;margin-right:300px;border:1px ;padding:25px">E-Store</h1></center>
</div>
<div style="margin-left:300px;margin-right:300px;border:1px solid blue;padding:25px>>
<form method= "post" action="#" style="margin-left:150px ; margin-right:150px; ">
    
    <?php echo csrf_field(); ?>
    <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
    </div>
  </div>

<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
  </div>

  <div class="col-auto">
  <center>  <button type="submit" text-align="center" class="btn btn-primary mb-3" herf="<?php echo e(route('customer.')); ?>">Login</button></center>
  </div>


</div>
<br>
<div style="margin-left:300px;margin-right:300px;border:1px solid blue;padding:25px">
   <center> <button type="submit"  class="btn btn-primary mb-3" herf="#">Register Now!</button></center>
  </div>
  </form>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\E-Lab Staff\Documents\2019sp090\HelloApp\resources\views/customer/index.blade.php ENDPATH**/ ?>