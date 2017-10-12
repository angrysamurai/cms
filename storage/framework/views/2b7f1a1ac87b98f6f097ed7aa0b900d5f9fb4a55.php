<?php $__env->startSection('content'); ?>

<div class="col-md-8">

	<h1>Log in</h1>

	<form method="POST" action="/login">

	<?php echo e(csrf_field()); ?>


		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" required>
		  </div>

		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" required>
		  </div>
		  
		  
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary" name="submit">Login</button>
		  </div>

		  <div class="form-group">
		  	<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		  </div>

		</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>