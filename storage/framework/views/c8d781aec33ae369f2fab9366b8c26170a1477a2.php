
<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

          <?php if(isset(Auth::user()->email)): ?>
      <script>Window.location="/sucess";</script>
      <?php endif; ?>
      <?php if($message =Session::get('error')): ?>
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong><?php echo e($message); ?></strong>
      </div>
      <?php endif; ?>
      <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <u1>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </u1>
          </div>
      <br/>
      <?php endif; ?>


      <div >
<center><h1 style="background-color:#0d6efd;margin-left:300px;margin-right:300px;border:1px ;padding:25px">E-Store</h1></center>
</div>
<div style="margin-left:300px;margin-right:300px;border:1px solid blue;padding:25px>">

<form method= "post" action="<?php echo e(route('login')); ?>" style="margin-left:150px ; margin-right:150px; ">
    
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
  <center>  <button type="submit" text-align="center" class="btn btn-primary mb-3" >Login</button></center>
  </div>


</div>
<br>
</form>
<div style="margin-left:300px;margin-right:300px;border:1px solid blue;padding:25px">
   <center> <a class="btn btn-primary mb-3" href="<?php echo e(route('reg')); ?>">Register Now!</a></center>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\jeeva\estore-1\HelloApp (2)\HelloApp\resources\views/login.blade.php ENDPATH**/ ?>