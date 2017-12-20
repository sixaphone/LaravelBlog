<?php $__env->startSection('content'); ?>
	<a href="/posts" class="btn btn-default"><i class="fa fa-arrow-left"> </i> Go Back</a>
	<hr>
	<img style="width: 100%;" src="/storage/cover_images/<?php echo e($post->cover_image); ?>" alt="Cover Image">	
	<hr>
	<h1><?php echo e($post->title); ?></h1>
	
	<hr>
	<div>
		<h4>
			<?php echo $post->body; ?>

		</h4>
	</div>
	<hr>
	<small>Created at <?php echo e($post->created_at); ?> by: <?php echo e($post->user->name); ?></small>
	<hr>
	<?php if(Auth::user()): ?>
		<?php if(auth()->user()->id === $post->user_id): ?>
			<a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-success">Edit</a>
			<?php echo Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST', 'class' => 'pull-right']); ?>

			<?php echo e(Form::hidden('_method','DELETE')); ?>

		 	<?php echo e(Form::submit('Delete',['class' => 'btn btn-danger'])); ?>

			<?php echo Form::close(); ?>

		<?php endif; ?>
	<?php endif; ?>
	<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>