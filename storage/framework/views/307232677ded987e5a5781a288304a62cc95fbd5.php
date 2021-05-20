
<?php $__env->startSection('title'); ?>
<title>Contact Us | News</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">	

					<div class="col-md-12 also-like">
						<h1>Contact Us</h1>
					</div>	
					
						<?php if(Session::has('message')): ?>
						<div class="col-sm-12">
							<div class="alert alert-success alert-dismissable fade in">
									<?php echo e(Session('message')); ?>

									<a href="3" class="close" data-dismiss='alert'>&times;</a>
							</div>
						</div>	
						<?php endif; ?>	
								
					<div class="col-sm-6">
						<form method="post" action="<?php echo e(url('sendmessage')); ?>">

							<?php echo e(csrf_field()); ?>

							<input type="hidden" name="tbl" value="<?php echo e(encrypt('messages')); ?>">
		
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>Your Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Your Phone</label>
								<input type="tel" name="phone" class="form-control">
							</div>
							<div class="form-group">
								<label>Your Message</label>
								<textarea name="message" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-success">Send</button>
							</div>
						</form>
					</div>
				</div>        
			</div>

<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">LATEST NEWS</span></h3>

					<?php $__currentLoopData = $latest->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
							<a href="<?php echo e(url('article')); ?>/<?php echo e($l->slug); ?>">
								<img src="<?php echo e(url('public/posts')); ?>/<?php echo e($l->image); ?>" width="100%" style="margin-left:-15px;" />
							</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4>
								<a href="<?php echo e(url('article')); ?>/<?php echo e($l->slug); ?>">
									<?php echo e($l->title); ?>

								</a></h4>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div> 
		<!-- advertisements  -->
          <?php if($sidebarTop): ?>
            <div class="col-sm-12 sidebar-adv"><a href="<?php echo e($sidebarTop->url); ?>" target="new">
                <img src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($sidebarTop->image); ?>" width="100%" 
            alt="<?php echo e($sidebarTop->title); ?>" /></a></div>
          <?php endif; ?>
          <?php if($sidebarBottom): ?>
            <div class="col-sm-12 sidebar-adv"><a href="<?php echo e($sidebarBottom->url); ?>" target="new">
                <img src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($sidebarBottom->image); ?>" width="100%" 
            alt="<?php echo e($sidebarBottom->title); ?>" /></a></div>
          <?php endif; ?>       
        <!-- advertisements  -->
			</div>
		</div> 
	</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/frontend/contact.blade.php ENDPATH**/ ?>