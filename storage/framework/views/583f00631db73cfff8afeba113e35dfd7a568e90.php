<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>ADMIN DASHBOARD | WEBSITE NAME</title>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('public/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('public/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('public/css/ionicons.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('public/css/menu.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('public/css/adminstyle.css')); ?>"> 
  
<script type="text/javascript" src="<?php echo e(url('public/js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/js/app.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/js/script.js')); ?>"></script> 

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.6.0/Sortable.js"></script> -->
</head>
<body>

<div class="sidebar">
  <ul class="sidebar-menu">
    <li><a href="<?php echo e(url('laranews-admin')); ?>" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(url('all-posts')); ?>"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="<?php echo e(url('add-post')); ?>"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="<?php echo e(url('viewcategory')); ?>"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(url('all-pages')); ?>"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="<?php echo e(url('add-page')); ?>"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Advertisement</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(url('all-advs')); ?>"><i class="fa fa-eye"></i>All Advs </a></li>
              <li><a href="<?php echo e(url('add-adv')); ?>"><i class="fa fa-plus-circle"></i>Add Adv</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="<?php echo e(url('messages')); ?>">
              <i class="fa fa-envelope"></i> <span>Messages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>

        <li class="treeview">
            <a href="<?php echo e(url('settings')); ?>">
              <i class="fa fa-user-plus"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span><?php echo e(Auth::user()->name); ?></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(url('register')); ?>"><i class="fa fa-user"></i>Add New User</a></li>
              <li><a href="<?php echo e(url('logout')); ?>"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>   
  </ul>
</div>

<?php echo $__env->yieldContent('content'); ?>

<footer>
  <div class="col-sm-6">
    Copyright &copy; <span class="day"><?php echo e(date('Y')); ?></span> <a href="https://www.atmamto.com">Atmamto Design Studio</a> All rights reserved.
  </div>
  <div class="col-sm-6">
    <span class="pull-right">Version 2.2.3</span>
  </div>
</footer>


</body>
</html><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/master.blade.php ENDPATH**/ ?>