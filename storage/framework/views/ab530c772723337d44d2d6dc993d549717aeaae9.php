<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $__env->yieldContent('title'); ?>
<title>COLORMAG - NEWS SITE</title>
<link href="<?php echo e(url('public/css/font-awesome.min.css')); ?>" rel="stylesheet"  />

<link href="<?php echo e(url('public/css/bootstrap.min.css')); ?>" rel="stylesheet"  />
<link href="<?php echo e(url('public/css/bootstrap-theme.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(url('public/css/style.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(url('public/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/bootstrap.min.js')); ?>"></script>
</head>

<body>
<div class="col-md-12 top" id="top">
	<div class="col-md-9 top-left">
    	<div class="col-md-3">
    		<span class="day"><?php echo e(date('l, M d, Y')); ?></span> 
          
        </div>
        <div class="col-md-9">
        	<span class="latest">Latest: </span> 
            <a href="<?php echo e(url('article')); ?>/<?php echo e($lastnews->slug); ?>">
            <?php echo e($lastnews->title); ?>

            </a>
        </div>
    </div>
    <div class="col-md-3 top-social">
         <?php $__currentLoopData = $setting->social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	   <a href="<?php echo e($social); ?>" class="social-icon"> <i class="fa fa-<?php echo e($icons[$key]); ?>"> </i> </a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="col-md-12 brand">
	<div class="col-md-4 name">
        <?php if($setting->image): ?>
    	<img src="<?php echo e(url('public/settings')); ?>/<?php echo e($setting->image); ?>" width="80%" alt="newspaper logo">
        <?php endif; ?>
    </div>
    <div class="col-md-8">
        <?php if($leaderboard): ?>
    	<a href="<?php echo e($leaderboard->url); ?>" target="new"><img src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($leaderboard->image); ?>" width="100%" 
        alt="<?php echo e($leaderboard->title); ?>" /></a>
   
        <?php endif; ?>
    </div>
</div>

<div class="col-md-12 main-menu">
	<div class="col-md-10 menu">
		<nav class="navbar">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
        		<span class="navbar-brand"><font color="#555555">COLOR</font><font color="#2ca0c9">MAG</font></span>
    		</div>
    		<div class="collapse navbar-collapse" id="mynavbar">
    			<ul class="nav nav-justified">
    				<li><a href="<?php echo e(url('/')); ?>" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
    				<li><a href="<?php echo e(url('category')); ?>/<?php echo e($cat->slug); ?>" class="text-uppercase"><?php echo e($cat->title); ?></a></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        		</ul> 
			</div>
		</nav>
	</div>
	<div class="col-md-2">
        <div class="search">
                <input type="search" id="search_content" class="form-control" />
                <span class="glyphicon glyphicon-search search-btn"></span>
                <div id="search-output"></div>  
        </div>

    </div>
</div> 
<!-- heder -->

<?php echo $__env->yieldContent('content'); ?>

<!-- footer -->
<div class="col-md-12 bottom">
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;">
                <span style="border-bottom:2px solid #2ca0c9;">About Us</span>
            </h3>
                <?php if($setting->image): ?>
                    <img src="<?php echo e(url('public/settings')); ?>/<?php echo e($setting->image); ?>" width="80%" alt="newspaper logo">
                <?php endif; ?>
            <p align="justify"> <?php echo e($setting->about); ?> </p>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #2ca0c9;">Quick Links</span></h3>
                <ul class="nav">
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                        <li>
                            <a href="<?php echo e(url('page')); ?>/<?php echo e($page->slug); ?>" class="text-uppercase">
                            <?php echo e($page->title); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <li>
                            <a href="<?php echo e(url('content-us')); ?>" class="text-uppercase">
                            Contact Us
                            </a>
                     </li>
                </ul> 
            </div>                 
             
        </div>
    <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #2ca0c9;">Contact Us</span></h3>
            <?php if($setting->image): ?>
                <img src="<?php echo e(url('public/settings')); ?>/<?php echo e($setting->image); ?>" width="100%" alt="newspaper logo">
            <?php endif; ?>
            <p>Follow us at: </p>
            <?php $__currentLoopData = $setting->social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e($social); ?>" class="social-icon"><i class="fa fa-<?php echo e($icons[$key]); ?>"> </i> </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="#top" class="goto"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
</div>

<div class="col-md-12 text-center copyright">
    Copyright &copy; <?php echo e(date('Y')); ?>   <a href="#">COLORMAG</a> Powered by: <a href="#">Atmamto</a>
</div>

<script>            
    $(document).ready(function() {
        var duration = 500;
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('.goto').fadeIn(duration);
            } else {
                $('.goto').fadeOut(duration);
            }
        });

        $('.goto').click(function(event) {
            event.preventDefault();
            $('html').animate({scrollTop: 0}, duration);
            return false;
        })

        $('#search_content').keyup(function() {
            var text = $('#search_content').val();
            if (text.length < 1) {
                $('#search-output').hide();
                return false;
            }else{

                $.ajax({
                    type : "get",
                    url : "<?php echo e(url('search-content')); ?>",
                    data : {text:text},
                    success:function(res){

                        $('#search-output').show();
                        $('#search-output').html(res);

                    }
                })
            }
          
            
        })
        
    });
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/frontend/master.blade.php ENDPATH**/ ?>