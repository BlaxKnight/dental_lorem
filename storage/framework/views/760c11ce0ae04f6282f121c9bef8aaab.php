<?php $__env->startSection('title' , '| loremipsum.com'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<!-- login container -->


<main>
  <!-- background -->
  <img class="object-fit-cover vw-100 vh-100 fixed-top" style="z-index: -1;" src="<?php echo e(url('assets/images/bg.svg')); ?>">

  <div class="container d-flex vh-100">
    <div class="bg-white w-100 shadow m-auto rounded-4" style="max-width: 600px;">
      <div class="row row-cols-1 container m-0">
        <div class="col mb-2">
          <h1 class="text-center">ورود به داشبورد</h1>
        </div>
        <div class="col">
          <form>
            <div class="row mb-3">
              <label for="username" class="col-sm-3 col-md-2 col-form-label">نام کاربری</label>
              <div class="col-sm-9 col-md-10">
                <input type="text" class="form-control" id="username">
              </div>
            </div>
            <div class="row mb-3">
              <label for="password" class="col-sm-3 col-md-2 col-form-label">رمز عبور</label>
              <div class="col-sm-9 col-md-10">
                <input type="password" class="form-control" id="password">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input class="btn btn-primary w-100" type="submit" value="ورود">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dental/resources/views/pages/login.blade.php ENDPATH**/ ?>