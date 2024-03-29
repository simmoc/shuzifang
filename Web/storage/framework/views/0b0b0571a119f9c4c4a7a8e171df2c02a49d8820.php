<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

 <!-- Content Header (Page header) -->
    <section class="content-header">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        
        <li class="active">Applications</li>
      </ol>
        </div>
    </section>
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo e(URL_CATEGORIES); ?>" class="btn btn-primary pull-right">List</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-12 col-xs-12 edd-cupons">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#"><strong>Title</strong> <span class="pull-right"><?php echo e($record->title); ?></span></a></li>
				<li><a href="#"><strong>Slug</strong> <span class="pull-right"><?php echo e($record->slug); ?></span></a></li>
				
                <li><a href="#"><strong>Description </strong><span class="pull-right"><?php echo e($record->description); ?><p>&nbsp;&nbsp;</p></span></a></li>
                
                <li><a href="#"><strong>Meta Tag Title</strong> <span class="pull-right"><?php echo e($record->meta_tag_title); ?></span></a></li>
                <li><a href="#"><strong>Meta Tag Description </strong><span class="pull-right"><?php echo e($record->meta_tag_description); ?></span></a></li>
                <li><a href="#"><strong>Meta Tag Keywords </strong><span class="pull-right"><?php echo e($record->meta_tag_keywords); ?></span></a></li>
                <li><a href="#"><strong>Show in Menu?</strong><span class="pull-right"><?php echo e(ucfirst($record->show_in_menu)); ?></span></a></li>
                <li><a href="#"><strong>Parent Menu </strong><span class="pull-right"><?php echo e($record->parent_id); ?></span></a></li>
				<li><a href="#"><strong>Status </strong><span class="pull-right"><?php echo e($record->status); ?></span></a></li>
				<li><a href="#"><strong>Image </strong><span class="pull-right"><?php echo e($record->image); ?></span></a></li>
                <li><a href="#"><strong>Sort Order </strong><span class="pull-right"><?php echo e($record->sort_order); ?></span></a></li>
                <li><a href="#"><strong>Created At </strong><span class="pull-right"><?php echo e($record->created_at); ?></span></a></li>
                <li><a href="#"><strong>Updated At</strong><span class="pull-right"><?php echo e($record->updated_at); ?></span></a></li>
                <li><a href="#"><strong>Last updated by</strong><span class="pull-right"><?php echo e($record->record_updated_by); ?></span></a></li>
                <li><a href="#"><strong>Updated at </strong><span class="pull-right"><?php echo e($record->updated_at); ?></span></a></li>

               
              </ul>
              
            </div>

          </div>
          
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

 <?php $__env->stopSection(); ?>
 
<?php $__env->startSection('footer_scripts'); ?>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>