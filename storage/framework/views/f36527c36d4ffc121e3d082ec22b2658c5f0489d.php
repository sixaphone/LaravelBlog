<?php $__env->startSection('content'); ?>
<div class="container">
	<h1><?php echo e($title); ?></h1>
	<br>
	<h4>This is the about page</h3>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>