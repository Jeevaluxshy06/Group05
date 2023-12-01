<?php $__env->startSection('content'); ?>
<html>
<body>
<center><h1 style="background-color:#0d6efd;margin-left:300px;margin-right:300px;border:1px ;padding:25px">Doctor Registration</h1></center>
<div style="margin-left:300px;margin-right:300px;border:1px solid blue;padding:25px>">

<form method= "post" action="<?php echo e(route('user.store')); ?>" style="margin-left:150px ; margin-right:150px; ">
    <?php echo csrf_field(); ?>
    <div class="mb-3 row">
        <label for="inputname" class="col-sm-2 col-form-label">workid:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" name="workid">
        </div>
<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">phone:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="phone">
    </div>
  </div>



<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">district:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="district">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">region:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="region">
    </div>
  </div>


 <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
  </div>

  <input type="hidden" name="role" value="customer">

  <div>
  <center>  <button type="submit" class="btn btn-primary mb-3" >Sign Up</button></center>
  </div>

</body>
</form>
  </html>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anjana\HelloApp\resources\views/mregistration.blade.php ENDPATH**/ ?>