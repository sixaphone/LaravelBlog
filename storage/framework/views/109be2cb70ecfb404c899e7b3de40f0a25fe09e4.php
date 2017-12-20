<?php $__env->startSection('content'); ?>
	<h1 class="text-center"><?php echo e($title); ?></h1>
	<?php if(count($services)>0): ?>
	<div class="text-center" >
	<ul class="list-unstyled list-group" style="margin:auto;width:20%;">
		<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li class="list-group-item"><?php echo e($service); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>