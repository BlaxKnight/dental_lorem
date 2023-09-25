<?php $__env->startSection('title' , '| loremipsum.com'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<img class="object-fit-cover vw-100 vh-100" src="<?php echo e(url('assets/images/bg.svg')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.login-d', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dental/resources/views/pages/login.blade.php ENDPATH**/ ?>