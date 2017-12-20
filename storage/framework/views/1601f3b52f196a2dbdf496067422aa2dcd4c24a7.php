<?php $__env->startSection('content'); ?>
	<div class="jumbotron text-center"  style="margin-top: 5%;">
		<h1>Home</h1>
		<p class="lead">WELCOME YOUNGLINGS</p><br>
		<?php if(auth()->guard()->guest()): ?>
		<p><a class="btn btn-lg btn-success" href="/register" role="button">Sign up today</a></p>
		<p><a class="btn btn-lg btn-info" href="/login" role="button">Log in tomorrow</a></p>
		<?php else: ?>
		<p><?php echo e(auth()->user()->name); ?></p>
		<p><?php echo e(auth()->user()->email); ?></p>
		
		<?php endif; ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>