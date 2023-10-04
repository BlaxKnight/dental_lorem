<!DOCTYPE html>
<html dir="rtl" <?php echo app('translator')->get('fa'); ?>>
 <head>
  <!--<meta http-equiv="refresh" content="5">-->
  <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
 </head>
 <body>
  <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

  <?php echo $__env->yieldContent('script'); ?>
 </body>
</html><?php /**PATH /opt/lampp/htdocs/dental/resources/views/layout/default.blade.php ENDPATH**/ ?>