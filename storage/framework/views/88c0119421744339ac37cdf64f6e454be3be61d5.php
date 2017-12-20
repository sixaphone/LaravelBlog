<?php $__env->startSection('content'); ?>
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>Edit Post</h1>
		<?php echo Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

		<div class="form-group">
			<?php echo e(Form::label('title','Title')); ?>

			<?php echo e(Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Title...'])); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('body','Content')); ?>

			<?php echo e(Form::textarea('message',$post->body,['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' => 'Enter Content...'])); ?>

		</div>
		<?php echo e(Form::hidden('_method','PUT')); ?>

		<div class="form-group"> 
			<?php echo e(Form::file('cover_image')); ?>	
	
		</div>
		<?php echo e(Form::submit('Update',['class'=>'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>