
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Advertisement  
        <button class="btn btn-sm btn-default">
          <a href="<?php echo e(url('add-adv')); ?>">
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
   
   <form method="post" action="<?php echo e(url('multipledelete')); ?>">
      <div class="filter-div">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="tbl" value="<?php echo e(encrypt('advertisements')); ?>">
        <input type="hidden" name="tblid" value="<?php echo e(encrypt('aid')); ?>">
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
                <th><input type="checkbox" id="select-all"> Title</th>
                <th>Link</th>
                <th>Location</th>
                <th>Image</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
             <?php if(count($data) > 0): ?>
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="<?php echo e($d->aid); ?>"> 
                  <a href="<?php echo e(url('editadv')); ?>/<?php echo e($d->aid); ?>"> <?php echo e($d->title); ?> </a>
                </td>
                <td> <?php echo e($d->url); ?> </td>
                <td> <?php echo e($d->location); ?> </td>
                <td> <img src="<?php echo e(url('public/advertisements')); ?>/<?php echo e($d->image); ?>" width="200"> </td>
                <td> <?php echo e($d->status); ?> </td>              
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <tr>
                <td colspan="4">No Data Found.</td>
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
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/advertisement/all-advs.blade.php ENDPATH**/ ?>