
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			<?php if(Session::has('message')): ?>
				<div class="alert alert-success alert-dismissable fade in">
					<?php echo e(Session('message')); ?>

					<a href="3" class="close" data-dismiss='alert'>&times;</a>
				</div>
			<?php endif; ?>
			<h3>Add New Category</h3>
			<form method="post" action="<?php echo e(url('addcategory')); ?>">
				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="tbl" value="<?php echo e(encrypt('categories')); ?>">

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="title" id="category_name" class="form-control">
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" id="slug" class="form-control" readonly="">
					<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
				</div>

				<div class="form-group">
					<label>Status</label>
					<select class="form-control" name="status">

						<option>On</option>
						<option>Off</option>
						
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Add New Category</button>
				</div>
			</form>	


		</div>

		<div class="col-sm-8 cat-view">
			<div class="row">
				<div class="col-sm-3">
					<select name="bulk-action" class="form-control">
						<option>Bulk Action</option>
						<option>Move to Trash</option>
					</select>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-default">Apply</button>
				</div>
				<div class="col-sm-3 col-sm-offset-4">
					<input type="text" id="search" name="search" class="form-control" placeholder="Search Category">
				</div>	
			</div>
			<div class="content">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><input type="checkbox" id="select-all"> Name</th>
							<th>Slug</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($data) > 0): ?>

						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>	
								<td>
									<input type="checkbox" name="select-cat"> 
									<a href="#"><?php echo e($category->title); ?></a>
								</td>
								<td><?php echo e($category->slug); ?></td>
								<td><?php echo e($category->status); ?></td>
							
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php else: ?>
						<tr>
							<td colspan="3">Not data found.</td>
						</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-sm-12">
			        <ul class="pagination">
			          <li><a href="#">&laquo;</a></li>
			          <li><a href="#">1</a></li>
			          <li><a href="#">2</a></li>
			          <li class="active"><a href="#">3</a></li>
			          <li><a href="#">4</a></li>
			          <li><a href="#">5</a></li>
			          <li><a href="#">&raquo;</a></li>
			        </ul>
			    </div>	
			</div>  						
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/category.blade.php ENDPATH**/ ?>