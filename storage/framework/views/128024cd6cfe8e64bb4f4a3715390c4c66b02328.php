<?php $__env->startSection('content'); ?>
	
	<?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

		<div class="form-group">
			<?php echo e(Form::label('title','Title')); ?>

			<?php echo e(Form::text('title','',['class' => 'form-control', 'placeholder' => 'Enter Title...'])); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('body','Content')); ?>

			<?php echo e(Form::textarea('message','',['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' => 'Enter Content...'])); ?>

		</div>
		<div class="form-group"> 
			<?php echo e(Form::file('cover_image')); ?>	
	
		</div>
		<?php echo e(Form::submit('Post',['class'=>'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>