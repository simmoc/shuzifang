<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<div class="container">
<?php $__env->startSection('content'); ?>

 <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i> <?php echo e(getPhrase('Home')); ?></a> </li>
      <li><a  href="<?php echo e(URL_ADMIN_USERS_DASHBOARD); ?>"><?php echo e(getPhrase('users_dashboard')); ?></a></li>         
      <li><a  href="<?php echo e(URL_USERS_VENDOR_DETAILS.$record->slug); ?>"><?php echo e($record->name); ?> <?php echo e(getPhrase('details')); ?></a></li>         
      <li class="active"><?php echo e(isset($title) ? $title : ''); ?></li>
    </ol>
  </div>
</div>
      
    </section>
    
  
      <!-- Main content -->

      <?php if(Auth::user()->role_id == VENDOR_ROLE_ID): ?>
  
  
  <!--SECTION cart DASHBOARD-2-->
    <section class="dashboard2">
        <div class="container">
            <div class="col-lg-12 head-title">
                <h3><?php echo e($record->name); ?> <?php echo e(getPhrase('purchases')); ?></h3>
            </div>
            <h2><?php echo e(getPhrase('my_dashboard')); ?></h2>
      <?php echo $__env->make('productvendor.menu', array('sub_active' => $sub_active, 'tab' => 'products'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="box-header">
      <a href="<?php echo e(URL_PRODUCTS_ADD); ?>" class="btn btn-primary pull-right"><?php echo e(getPhrase('Add')); ?></a>
            </div>
      <div id="history" class="tab-pane fade in active">
        
        <table id="example2" class="table table-bordered table-hover datatable">
          <thead>
                <tr>
          <th><?php echo e(getPhrase('product_name')); ?></th>
          
          <th><?php echo e(getPhrase('cost')); ?></th>
          <th><?php echo e(getPhrase('discount_amount')); ?></th>
          <th><?php echo e(getPhrase('paid_amount')); ?></th>
          <th><?php echo e(getPhrase('payment_gateway')); ?></th>
          <th><?php echo e(getPhrase('payment_status')); ?></th>
          <th><?php echo e(getPhrase('date')); ?></th>
          <th><?php echo e(getPhrase('customer_email')); ?></th>
          
                </tr>
                </thead>
                <tbody>
                
                </tbody>
          
          </table>
      </div>
    </div>
  </section>
  <?php else: ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
      
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover datatable">
                <thead>
                <tr>
					<th><?php echo e(getPhrase('product_name')); ?></th>
					
					<th><?php echo e(getPhrase('cost')); ?></th>
					<th><?php echo e(getPhrase('discount_amount')); ?></th>
					<th><?php echo e(getPhrase('paid_amount')); ?></th>
					<th><?php echo e(getPhrase('payment_gateway')); ?></th>
					<th><?php echo e(getPhrase('payment_status')); ?></th>
					<th><?php echo e(getPhrase('date')); ?></th>
					<th><?php echo e(getPhrase('customer_email')); ?></th>
					
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
     
      <!-- /.row -->
    </section>

    <?php endif; ?>
    <!-- /.content -->

 <?php $__env->stopSection(); ?>
</div>
<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.datatables',array('route'=>URL_VENDOR_PURCHASES_LIST.$user_slug,'route_as_url'=>TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>