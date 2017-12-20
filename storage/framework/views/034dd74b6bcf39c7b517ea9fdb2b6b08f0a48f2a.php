<?php $__env->startSection('content'); ?>
	
<h1>Posts</h1>
	<?php if(count($posts)>0): ?>
	<div class="text-left">

		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="well">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img style="width: 100%;" src="/storage/cover_images/<?php echo e($post->cover_image); ?>" alt="Cover Image">	
				</div>

				<div class="col-md-8 col-sm-8">
					
					<a style="text-decoration: none; color:black;" href="/posts/<?php echo e($post->id); ?>"> <div class="container-fluid" style="background-color: #f2f2f2; border: 2px solid #dddddd;">
						<h4><?php echo e($post['title']); ?></h4>
						<p><?php echo $post['body']; ?></p>	
						<small>Created at <?php echo e($post->created_at); ?> by: <?php echo e($post->user->name); ?></small>
						<br>
					</div>
					</a>
				</div>
			</div>

		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($posts->links()); ?>

	</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>