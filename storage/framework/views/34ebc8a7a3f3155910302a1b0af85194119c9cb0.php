<?php $__env->startSection('content'); ?>
<html>
<body>

  <a href="/mprofile">  Back <a>

<form method= "post" action="<?php echo e(route('user.store')); ?>" style="margin-left:150px ; margin-right:150px; ">
    <?php echo csrf_field(); ?>
    <br>
    <div class="mb-3 row">
        <label for="inputname" class="col-sm-2 col-form-label">WorkID:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" name="id" value=" <?php echo e(Auth::user()->slmc); ?>">
        </div>
        <br><br><br>
    <div class="mb-3 row">
        <label for="inputname" class="col-sm-2 col-form-label">slmc:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" name="slmc">
        </div>
        <br><br><br>
<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Date:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name">
    </div>
  </div>
  <br><br>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="time">
    </div>
  </div>
<br><br>
<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Note:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="note">
    </div>
  </div>
<br><br>


  <input type="hidden" name="role" value="customer">

  <div>
  <center>  <button type="submit" class="btn btn-primary mb-3" >Submit</button></center>
  </div>

</body>
</form>
  </html>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anjana\HelloApp\resources\views/mrequest.blade.php ENDPATH**/ ?>