 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Dashboard'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>

<div id="content" class="bg-container">
	 <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>