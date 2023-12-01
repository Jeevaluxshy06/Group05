<?php $__env->startSection('content'); ?>
<html>
<body>

  <a href="/">  Back <a>

<form method= "post" action="<?php echo e(route('user.store')); ?>" style="margin-left:150px ; margin-right:150px; ">
    <?php echo csrf_field(); ?>
    <br>
    <div class="mb-3 row">
        <label for="inputname" class="col-sm-2 col-form-label">slmc:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" name="slmc">
        </div>
        <br><br><br>
<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name">
    </div>
  </div>
  <br><br>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">phone:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="phone">
    </div>
  </div>
<br><br>
<div class="mb-3 row">
  <label for="inputname" class="col-sm-2 col-form-label">speciality</label>
  <div class="col-sm-4">
  <select name="speciality" class="form-select" aria-label="Default select example">
  <option value="None">None</option>
  <option value="Pediatrics">Pediatrics</option>
  <option value="Dermotology">Dermotology</option>
  <option value="Orthopedics">Orthopedics</option>
</select></div>
</div>
<br><br>
<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">district:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="district">
    </div>
  </div>
  <br><br>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">region:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="region">
    </div>
  </div>
  <br><br>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">hospital:</label>
    <div class="col-sm-10">
        <select name="hospital" class="form-select" aria-label="Default select example">
            <option value="None">None</option>
            <option value="Pediatrics">J/Teaching Hospital</option>
            <option value="Dermotology">J/General Hospital</option>
            <option value="Orthopedics">Magaragama Hospital</option>
          </select></div>
  </div>
<br><br>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anjana\HelloApp\resources\views/customer/customerreg.blade.php ENDPATH**/ ?>