
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> The Settings</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			<?php if(Session::has('message')): ?>
				<div class="alert alert-success alert-dismissable fade in">
					<?php echo e(Session('message')); ?>

					<a href="3" class="close" data-dismiss='alert'>&times;</a>
				</div>
			<?php endif; ?>
			<h3>Website Settings</h3>

			
			<?php if(count(array($data)) < 1): ?>

		

			<form method="post" action="<?php echo e(url('addsettings')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="tbl" value="<?php echo e(encrypt('settings')); ?>">

				<div class="form-group">
					<label>Logo</label>
					<input type="file" name="image" class="form-control">
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
						<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Upload Image</label></p>
						<p><img id="output"/></p>
				</div>

				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10"></textarea>
				</div>

				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						<input type="url" name="social[]" class="form-control">
						<p class="text-muted"> e.g https://www.facebook.com/atmamto</p>
					</div>
				 </div>
				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField">
						<i class="fa fa-plus"> </i>
					</span>
				</div>

				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<!-- <a href="#" class="close" data-dismissable="alert">&times;</a> -->
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> You 've reached the social fields limit.  
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Add Settings</button>
				</div>
			</form>	
			<script>
				var socialCounter = 1;
				$('#addSocialField').click(function(){

					socialCounter++;
					if(socialCounter > 5){
						$('#socialAlert').removeClass('noshow');
						return;
					}
					newDev = $(document.createElement('div')).attr("class","form-group");
					newDev.after().html('<input type="url" name="social[]" class="form-control"></div>');
					newDev.appendTo("#socialFieldGroup");
				})
	
			</script>
			<?php else: ?>
				<form method="post" action="<?php echo e(url('updatesettings')); ?>/<?php echo e($data->sid); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>


					<input type="hidden" name="tbl" value="<?php echo e(encrypt('settings')); ?>">
					<input type="hidden" name="sid" value="<?php echo e($data->sid); ?>">

					<div class="form-group">
						<label>Logo</label>
						<?php if(!empty($data->image)): ?>
						<p><img src="<?php echo e(url('public/settings')); ?>/<?php echo e($data->image); ?>" id="output"></p>
						<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
						<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Replace Image</label></p>
					
						<?php else: ?>
						<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
						<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
						<p><img id="output" /></p>
						<?php endif; ?>
						
					</div>

					<div class="form-group">
						<label>About Us</label>
						<textarea name="about" class="form-control" rows="10"><?php echo e($data->about); ?></textarea>
					</div>

					<div id="socialFieldGroup">
						<div class="form-group">
							<label>Social</label>
							<?php $__currentLoopData = $data->social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="form-group">
								<input type="url" name="social[]" class="form-control socialCount" value="<?php echo e($social); ?>">
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
						</div>
					 </div>
					<div class="text-right form-group">
						<span class="btn btn-warning" id="addSocialField">
							<i class="fa fa-plus"> </i>
						</span>
					</div>

					<div class="form-group">
						<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong>Sorry !</strong> You 've reached the social fields limit.  
						</div>
					</div>

					<div class="form-group">
						<button class="btn btn-primary">Update Settings</button>
					</div>
				</form>	
				<script>

					socialCounter = $('.socialCount').length;
					$('#addSocialField').click(function(){
					
						socialCounter++;
						if(socialCounter > 5){
							$('#socialAlert').removeClass('noshow');
							return;
						}
						newDev = $(document.createElement('div')).attr("class","form-group");
						newDev.after().html('<input type="url" name="social[]" class="form-control"></div>');
						newDev.appendTo("#socialFieldGroup");
					})
	
				</script>
			<?php endif; ?>
		</div>
	</div>
</div>
<style type="text/css">
	.noshow{ display: none;}
</style>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/settings.blade.php ENDPATH**/ ?>