
<?php $__env->startSection('title'); ?>
<title><?php echo e($data->title); ?> | News</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- start - this for share facebook   -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="jBWwoJb4"></script>
<!-- end - this for share facebook  -->
<!-- start - this for share twitter   -->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<!-- end - this for share twitter  -->
	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">	

					<div class="col-md-12 also-like">
						<div class="text-right view-count">
							<h3> 
								<i class="fa fa-eye"></i>
								<?php echo e($data->views + 1); ?> 

								<?php if($data->views > 1): ?>
								Views
								<?php else: ?>
								View
								<?php endif; ?>
							</h3>
						</div>
						<h1><?php echo e($data->title); ?></h1>
						<img src="<?php echo e(url('public/posts')); ?>/<?php echo e($data->image); ?>" width="100%" style="margin-bottom:15px;" />
						
						<?php echo $data->description; ?>

					</div>	
					<div class="col-sm-12 share-this">
						<h3>Share this..</h3>
			
							<div class="fb-share-button" data-href="<?php echo e(url('article')); ?>/<?php echo e($data->image); ?>" data-layout="button" data-size="small"></div>

							<span class="tweet-btn"> 
								<a class="twitter-share-button" data-size="small"
								  href="<?php echo e(url('article')); ?>/<?php echo e($data->image); ?>">
								Tweet</a>
							</span>

							<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
							<script type="IN/Share" data-url="<?php echo e(url('article')); ?>/<?php echo e($data->image); ?>" ></script>
					
					</div>
					
						<div class="col-md-12 also-like">
							<h3>You May Also Like</h3>
						</div>
						<?php $__currentLoopData = $related->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
						<div class="col-md-4">
							<a href="<?php echo e(url('article')); ?>/<?php echo e($r->slug); ?>">
								<img src="<?php echo e(url('public/posts')); ?>/<?php echo e($r->image); ?>" width="100%" style="margin-bottom:15px;" />
							</a>
							<h3>
								<a href="<?php echo e(url('article')); ?>/<?php echo e($r->slug); ?>">
								<?php echo e($r->title); ?>

								</a>
							</h3>
							<?php echo substr($r->description,0,100); ?>

						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
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
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/frontend/article.blade.php ENDPATH**/ ?>