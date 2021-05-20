
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Pages 
        <button class="btn btn-sm btn-default">
          <a href="<?php echo e(url('add-page')); ?>">
        <i class="fa fa-plus-circle"></i> Add New
        </a>
        </button>
      </h1>
    </div>
    <div class="col-sm-12">
      <?php if(Session::has('message')): ?>
        <div class="alert alert-success alert-dismissable fade in">
          <?php echo e(Session('message')); ?>

          <a href="3" class="close" data-dismiss='alert'>&times;</a>
        </div>
      <?php endif; ?>
    </div>
    <div class="search-div">
      <div class="col-sm-9">
       
        All<?php echo e($allposts); ?> | <a href="#">Published (<?php echo e($published); ?>)</a>
       
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>
   <form method="post" action="<?php echo e(url('multipledelete')); ?>">
      <div class="filter-div">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="tbl" value="<?php echo e(encrypt('pages')); ?>">
        <input type="hidden" name="tblid" value="<?php echo e(encrypt('pageid')); ?>">
          <div class="col-sm-2">
            <select name="bulk-action" class="form-control">
              <option value="0">Bulk Action</option>
              <option value="1">Move to Trash</option>
            </select>
          </div>
          <div class="col-sm-7">
            <div class="row">
              <button class="btn btn-default">Apply</button>
            </div>  
          </div>
        <div class="col-sm-3 text-right">
          
        </div>
      </div>  
      <div class="col-sm-12">
        <div class="content">
          <table class="table table-striped" id="myTable">
            <thead>
              <tr>
                <th width="50%"><input type="checkbox" id="select-all"> Title</th>
                <th width="15%">Status</th>
                <th width="10%">Date</th>
              </tr>
            </thead>
            <tbody>
             <?php if(count($posts) > 0): ?>
             <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="<?php echo e($post->pageid); ?>"> 
                  <a href="<?php echo e(url('editpage')); ?>/<?php echo e($post->pageid); ?>"> 
                    <?php echo e($post->title); ?> 
                  </a>
                </td>
                <td> <?php echo e($post->status); ?> </td>
                <td> <?php echo e($post->created_at); ?> </td>              
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <tr>
                <td colspan="4">No Pages Found.</td>
              </tr> 
              <?php endif; ?> 

            </tbody>
          </table>
        </div>
      </div>
    </form>

 
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/pages/all-pages.blade.php ENDPATH**/ ?>