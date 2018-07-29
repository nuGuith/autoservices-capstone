 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Dashboard'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>

<?php echo 'yo!';?>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>