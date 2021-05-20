
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Messages </h1>
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
       
        All (<?php echo e(count($data)); ?>)
       
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>
   <form method="post" action="<?php echo e(url('multipledelete')); ?>">
      <div class="filter-div">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="tbl" value="<?php echo e(encrypt('messages')); ?>">
        <input type="hidden" name="tblid" value="<?php echo e(encrypt('mid')); ?>">
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
                <th><input type="checkbox" id="select-all"> Sender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>

              </tr>
            </thead>
            <tbody>
             <?php if(count($data) > 0): ?>
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="<?php echo e($message->mid); ?>"> 
                
                    <?php echo e($message->name); ?> 
               
                </td>
                <td> <?php echo e($message->email); ?> </td>
                <td> <?php echo e($message->phone); ?> </td>
                <td> <?php echo e(substr ($message->message,0,100)); ?>

                 <a href="#extend<?php echo e($message->mid); ?>" data-toggle="modal">Expand</a> 
                </td>
                <td> <?php echo e($message->created_at); ?> </td>  
                <div class="modal" id="extend<?php echo e($message->mid); ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h4 class="modal-title">Message sent by : <?php echo e($message->name); ?></h4>
                        
                      </div>
                      <div class="modal-body">
                        <?php echo e($message->message); ?>

                      </div>
                      <div class="modal-footer">
                        <p>Send on : <?php echo e($message->created_at); ?></p>
                        <p>Phone : <?php echo e($message->phone); ?></p>
                        <p>Email : <?php echo e($message->email); ?></p>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>            
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <tr>
                <td colspan="4">No Messages Found.</td>
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
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/messages.blade.php ENDPATH**/ ?>