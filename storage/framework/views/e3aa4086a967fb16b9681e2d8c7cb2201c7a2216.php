
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Edit Advertisement</h1>
		</div>
		<div class="col-sm-12">
			<?php if(Session::has('message')): ?>
				<div class="alert alert-success alert-dismissable fade in">
					<?php echo e(Session('message')); ?>

					<a href="3" class="close" data-dismiss='alert'>&times;</a>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<form method="post" action="<?php echo e(url('updateadv')); ?>/<?php echo e($data->aid); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>


					<input type="hidden" name="tbl" value="<?php echo e(encrypt('advertisements')); ?>">
					<input type="hidden" name="aid" value="<?php echo e($data->aid); ?>">
					<div class="col-sm-12">
						<div class="form-group">	
							<input type="text" name="title" class="form-control" value="<?php echo e($data->title); ?>">				
						</div>	
			            <div class="form-group">  
			              <input type="url" name="url" class="form-control" value="<?php echo e($data->url); ?>">        
			            </div>  

						
						<div class="content featured-image">
							<h4>Advertisement Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
							<?php if($data->image != ''): ?>

							<p><img id="output" style="max-width: 100%"  src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($data->image); ?>" /></p>
							<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" ></p>
							<p><label for="file" style="cursor: pointer;">Replace Image</label></p>

							<?php else: ?>
							<p><img id="output" style="max-width: 100%"  src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($data->image); ?>" /></p>
							<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" ></p>
							<p><label for="file" style="cursor: pointer;">Upload Image</label></p>							
							<?php endif; ?>
						</div>
						
						<div class="form-group">
							<label>Location</label>
							<select name="location" class="form-control">
								<option><?php echo e($data->location); ?></option>
								<?php if($data->location != 'leaderboard'): ?>
								<option>leaderboard</option>
								<?php endif; ?>
								<?php if($data->location != 'sidebar-top'): ?>
								<option>sidebar-top</option>
								<?php endif; ?>
								<?php if($data->location != 'sidebar-bottom'): ?>
								<option>sidebar-bottom</option>
								<?php endif; ?>																	
							</select>						
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control">
								<option><?php echo e($data->status); ?></option>
								<?php if($data->status == 'hide'): ?>
								<option>display</option>
								<?php else: ?>
								<option>hide</option>
								<?php endif; ?>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Update Advertisement</button>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/advertisement/edit-adv.blade.php ENDPATH**/ ?>