
<?php $__env->startSection('content'); ?>

<div class="wrapper">
    <?php if(count($featured) > 0): ?>
	<div class="row">
        <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key == 0): ?>
		<div class="col-md-6">
            <div class="relative">
                <a href="<?php echo e(url('article')); ?>/<?php echo e($f->slug); ?>">
                    <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($f->image); ?>" width="100%" />
                    <span class="caption"><?php echo e($f->title); ?></span>
                </a>
            </div>
    	</div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	<div class="col-md-6">
    		<div class="row">
                <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 0 && $key < 3): ?>
        		<div class="col-md-6">
                    <div class="relative">
                        <a href="<?php echo e(url('article')); ?>/<?php echo e($f->slug); ?>">
                            <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($f->image); ?>" width="100%" />
                            <span class="caption"><?php echo e($f->title); ?></span>
                        </a>
                    </div>
        	    </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</div>
        	<div class="row" style="margin-top:30px;">
                <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 3 && $key < 6): ?>
        		<div class="col-md-6">
        	    	<div class="relative">
                        <a href="<?php echo e(url('article')); ?>/<?php echo e($f->slug); ?>">
                            <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($f->image); ?>" width="100%" />
                            <span class="caption"><?php echo e($f->title); ?></span>
                        </a>
                    </div>
        	    </div>
        	    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</div>        
    	</div>
	</div>
    <?php endif; ?>
    <div class="row" style="margin-top:30px;">
    	<div class="col-md-8">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
        	<div class="col-md-12">
        		<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">NEWS</span></h3>
        	</div>
        	<div class="col-md-6">
                <?php $__currentLoopData = $general; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key == 0): ?>
            	<a href="<?php echo e(url('article')); ?>/<?php echo e($g->slug); ?>">
                  <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($g->image); ?>" width="100%" style="margin-bottom:15px;" />
                </a>
                <h3><a href="<?php echo e(url('article')); ?>/<?php echo e($g->slug); ?>"><?php echo e($g->title); ?></a></h3>
        		<p align="justify"><?php echo substr($g->description,0,300); ?></p> 
                <a href="<?php echo e(url('article')); ?>/<?php echo e($g->slug); ?>"> Read more &raquo;
                    <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-md-6">
                <?php $__currentLoopData = $general; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 0 && $key < 6): ?>
            	<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<a href="<?php echo e(url('article')); ?>/<?php echo e($g->slug); ?>">
                                <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($g->image); ?>" width="100%" />
                            </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="<?php echo e(url('article')); ?>/<?php echo e($g->slug); ?>"><?php echo e($g->title); ?></a></h4>
                		</div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
            
	        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
    	    	<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">BUSINESS</span></h3>

                <div class="flex">
                    <?php $__currentLoopData = $business->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
            	       <a href="<?php echo e(url('article')); ?>/<?php echo e($b->slug); ?>">
                        <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($b->image); ?>" />
                       </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
	        </div>
        
        <div class="row">
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">SPORTS</span></h3>

                    <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 0): ?>
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($s->slug); ?>">
                      <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($s->image); ?>" width="100%" style="margin-bottom:15px;" />
                    </a>
                    <h3><a href="<?php echo e(url('article')); ?>/<?php echo e($s->slug); ?>"><?php echo e($s->title); ?></a></h3>
                    <p align="justify"><?php echo substr($s->description,0,300); ?></p> 
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($s->slug); ?>"> Read more &raquo;
                        <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            	</div>
                <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 0 && $key < 5): ?>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
    	            	 <a href="<?php echo e(url('article')); ?>/<?php echo e($s->slug); ?>">
                             <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($s->image); ?>" width="100%" style="margin-bottom:15px;" />
                         </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="<?php echo e(url('article')); ?>/<?php echo e($s->slug); ?>"><?php echo e($s->title); ?></a></h4>
                		</div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div></div>
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #d95757; padding-bottom:5px;"><span style="padding:6px 12px; background:#d95757;">TECHNOLOGY</span></h3>
            	
                    <?php $__currentLoopData = $technology; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 0): ?>
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($t->slug); ?>">
                      <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($t->image); ?>" width="100%" style="margin-bottom:15px;" />
                    </a>
                    <h3><a href="<?php echo e(url('article')); ?>/<?php echo e($t->slug); ?>"><?php echo e($t->title); ?></a></h3>
                    <p align="justify"><?php echo substr($t->description,0,300); ?></p> 
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($t->slug); ?>"> Read more &raquo;
                        <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	</div>

                <?php $__currentLoopData = $technology; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 0 && $key < 5): ?>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row fashion">
                         <a href="<?php echo e(url('article')); ?>/<?php echo e($t->slug); ?>">
                             <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($t->image); ?>" width="100%" style="margin-bottom:15px;" />
                         </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h4><a href="<?php echo e(url('article')); ?>/<?php echo e($t->slug); ?>"><?php echo e($t->title); ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </div></div>
        
        <div class="col-md-12">
        	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
			<div class="col-md-12">
            <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">HEALTH</span></h3>
            </div>
        	<div class="col-md-6">
            	 <?php $__currentLoopData = $health; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 0): ?>
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($h->slug); ?>">
                      <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($h->image); ?>" width="100%" style="margin-bottom:15px;" />
                    </a>
                    <h3><a href="<?php echo e(url('article')); ?>/<?php echo e($h->slug); ?>"><?php echo e($h->title); ?></a></h3>
                    <p align="justify"><?php echo substr($h->description,0,300); ?></p> 
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($h->slug); ?>"> Read more &raquo;
                        <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-md-6">
            	<?php $__currentLoopData = $health; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 0 && $key < 5): ?>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row fashion">
                         <a href="<?php echo e(url('article')); ?>/<?php echo e($h->slug); ?>">
                             <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($h->image); ?>" width="100%" style="margin-bottom:15px;" />
                         </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h4><a href="<?php echo e(url('article')); ?>/<?php echo e($h->slug); ?>"><?php echo e($h->title); ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>
        </div>
		</div>
        
        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
                <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">TRRVEL</span></h3>

                <div class="flex">
                    <?php $__currentLoopData = $travel->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                       <a href="<?php echo e(url('article')); ?>/<?php echo e($tr->slug); ?>">
                        <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($tr->image); ?>" />
                       </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
        
        <div class="col-md-12">
            <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
            <div class="col-md-12">
            <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">ENTERTAINMENT </span></h3>
            </div>
            <div class="col-md-6">
                 <?php $__currentLoopData = $entertainment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$en): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 0): ?>
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($en->slug); ?>">
                      <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($en->image); ?>" width="100%" style="margin-bottom:15px;" />
                    </a>
                    <h3><a href="<?php echo e(url('article')); ?>/<?php echo e($en->slug); ?>"><?php echo e($en->title); ?></a></h3>
                    <p align="justify"><?php echo substr($en->description,0,300); ?></p> 
                    <a href="<?php echo e(url('article')); ?>/<?php echo e($en->slug); ?>"> Read more &raquo;
                        <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-md-6">
                <?php $__currentLoopData = $entertainment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$en): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key > 0 && $key < 5): ?>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row fashion">
                         <a href="<?php echo e(url('article')); ?>/<?php echo e($en->slug); ?>">
                             <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($en->image); ?>" width="100%" style="margin-bottom:15px;" />
                         </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h4><a href="<?php echo e(url('article')); ?>/<?php echo e($en->slug); ?>"><?php echo e($en->title); ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>
        </div>
        </div>
        </div>
</div>

        <div class="col-md-4">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">POLITICS</span></h3>
            <?php $__currentLoopData = $politics->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	           	<div class="col-md-4">
                   	<div class="row">
    	           		<a href="<?php echo e(url('article')); ?>/<?php echo e($p->slug); ?>">
                         <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($p->image); ?>" width="100%" style="margin-left:-15px;" />
                        </a>
        	       	</div>
                </div>
            	<div class="col-md-8">
                   	<div class="row" style="padding-left:10px;">
                		<h4><a href="<?php echo e(url('article')); ?>/<?php echo e($p->slug); ?>"><?php echo e($p->title); ?></a></h4>
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
           <!-- advertisements  -->

          <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 60px 15px; margin-top:30px;">
            <?php $__currentLoopData = $style; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($key == 0 && $key < 10): ?>
          	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
           		<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">STYLE</span></h3>

                    <a href="<?php echo e(url('article')); ?>/<?php echo e($st->slug); ?>"> <img src="<?php echo e(url('public/posts')); ?>/<?php echo e($st->image); ?>" width="100%" style="margin-bottom:15px;" /></a>
        			<p align="justify"><?php echo substr($st->description,0,300); ?></p>
                     <a href="<?php echo e(url('article')); ?>/<?php echo e($st->slug); ?>">Read more &raquo;</a>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
             <?php $__currentLoopData = $style; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if($key == 0 && $key < 10): ?>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<img src="<?php echo e(url('public/posts')); ?>/<?php echo e($st->image); ?>" width="100%" style="margin-left:-15px;" />
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4><a href="<?php echo e(url('article')); ?>/<?php echo e($st->slug); ?>"><?php echo e($st->title); ?></a></h4>
                		</div>
                    </div>
                </div>
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
          <!-- advertisements  -->
          <?php if($sidebarBottom): ?>
            <div class="col-sm-12 sidebar-adv"><a href="<?php echo e($sidebarBottom->url); ?>" target="new">
                <img src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($sidebarBottom->image); ?>" width="100%" 
            alt="<?php echo e($sidebarBottom->title); ?>" /></a></div>
          <?php endif; ?>
        <!-- advertisements  -->
          </div> 
          
        </div>
    </div> 
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/frontend/index.blade.php ENDPATH**/ ?>