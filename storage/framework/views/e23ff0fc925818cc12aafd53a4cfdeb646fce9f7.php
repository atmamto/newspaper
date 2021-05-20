
<?php $__env->startSection('title'); ?>
<title><?php echo e($cat->title); ?> | News</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">
					<div class="col-md-12">
						<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742; text-transform:uppercase; "><?php echo e($cat->title); ?></span></h3>
					</div>
					<?php if(count($posts) > 0): ?>
					<div class="col-md-12">
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($key == 0): ?>
						 <a href="<?php echo e(url('article')); ?>/<?php echo e($post->slug); ?>"> 
						 	<img src="<?php echo e(url('public/posts')); ?>/<?php echo e($post->image); ?>" width="100%" style="margin-bottom:15px;" /></a>

						<?php echo substr($post->description,0,300); ?>


						<p><a href="<?php echo e(url('article')); ?>/<?php echo e($post->slug); ?>"> Read more &raquo; </a></p>

						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($key > 0 && $key < 10): ?>
						<div class="col-md-6">
							 <a href="<?php echo e(url('article')); ?>/<?php echo e($post->slug); ?>"> 
						 	<img src="<?php echo e(url('public/posts')); ?>/<?php echo e($post->image); ?>" width="100%" style="margin-bottom:15px;" /></a>
							<?php echo substr($post->description,0,100); ?>

							<p><a href="<?php echo e(url('article')); ?>/<?php echo e($post->slug); ?>"> Read more &raquo; </a></p>
						</div>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
					<?php endif; ?>            
				</div>        
			</div>

<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">RESENT NEWS</span></h3>
					
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
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/frontend/category.blade.php ENDPATH**/ ?>