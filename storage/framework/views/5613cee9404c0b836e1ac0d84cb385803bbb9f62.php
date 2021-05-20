
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Edit Post</h1>
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
				<form method="post" action="<?php echo e(url('updatepost')); ?>/<?php echo e($data->pid); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>


					<input type="hidden" name="tbl" value="<?php echo e(encrypt('posts')); ?>">
					<input type="hidden" name="pid" value="<?php echo e($data->pid); ?>">
					<div class="col-sm-9">
						<div class="form-group">	
							<input type="text" name="title" class="form-control" id="post_title" placeholder="Enter title here" value="<?php echo e($data->title); ?>">				
						</div>	
			            <div class="form-group">  
			              <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug here" value="<?php echo e($data->slug); ?>">        
			            </div>  

						<div class="form-group">		
							<textarea class="form-control" name="description" rows="15">
								<?php echo e($data->description); ?>

							</textarea>
							<div class="col-sm-12 word-count">Word count: 0</div>
						</div>	
					</div>
					<div class="col-sm-3">
						<div class="content publish-box">
							<h4>Publish  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
							<div class="form-group">
								<button class="btn btn-default" name="status" value="draft">Save Draft</button>
							</div>
							<p>Status: Draft <a href="#">Edit</a></p>
							<p>Visibility: Public <a href="#">Edit</a></p>
							<p>Publish: Immediately <a href="#">Edit</a></p>
							<div class="row">
								<div class="col-sm-12 main-button">
									<button class="btn btn-primary pull-right" name="status" value="publish">Publish</button>
								</div>
							</div>	
						</div>
						
						<div class="content cat-content">
							<h4>Category  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>

							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	

							<p><label for="<?php echo e($cat->cid); ?>"><input type="checkbox" 
								name="category_id[]" 
							 value="<?php echo e($cat->cid); ?>" <?php if(in_array($cat->cid, $postcat)): ?> 
							 checked <?php endif; ?>><?php echo e($cat->title); ?></label></p>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="content featured-image">
							<h4>Featured Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
							<?php if($data->image != ''): ?>					
							<p><img id="output" style="max-width: 100%" 
								src="<?php echo e(url('public/posts')); ?>/<?php echo e($data->image); ?>" /></p>
							<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
							<p><label for="file" style="cursor: pointer;">Replace Featured Image</label></p>
							<?php else: ?>
							<p><img id="output" style="max-width: 100%" /></p>
							<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
							<p><label for="file" style="cursor: pointer;">Set Featured Image</label></p>
							<?php endif; ?>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<script src="<?php echo e(url('public/ckeditor/ckeditor.js')); ?>"></script>
<script>
	CKEDITOR.replace('description', { "filebrowserBrowseUrl": "ckfinder\/ckfinder.html", "filebrowserImageBrowseUrl": "ckfinder\/ckfinder.html?type=Images", "filebrowserFlashBrowseUrl": "ckfinder\/ckfinder.html?type=Flash", "filebrowserUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Files", "filebrowserImageUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Images", "filebrowserFlashUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Flash" });	
</script>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/posts/edit.blade.php ENDPATH**/ ?>