<?php $__env->startSection('title' , '| loremipsum.com'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main>
  <!-- background -->
  <img class="object-fit-cover vw-100 vh-100 fixed-top" style="z-index: -1;" src="<?php echo e(url('assets/images/bg.svg')); ?>">

  <!-- container -->
  <div class="container d-flex vh-100">
    <!-- login box -->
    <div class="bg-white w-100 shadow m-auto rounded-4" style="max-width: 600px;">
      <div class="row row-cols-1 container m-0">
        <div class="col my-2">
          <!-- title -->
          <h1 class="display-6 text-primary text-center">ورود به داشبورد</h1>
        </div>
        <div class="col">
          <!-- form -->
          <form action="<?php echo e(route('authenticate')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <!-- username -->
            <div class="row mb-3">
              <label for="username" class="col-sm-3 col-md-2 col-form-label text-muted">نام کاربری</label>
              <div class="col-sm-9 col-md-10">
                <div class="input-group">
                  <input type="text" dir="ltr" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username" name="username" value="<?php echo e(old('email')); ?>">
                  <?php if($errors->has('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                  <?php endif; ?>
                  <button type="button" class="btn btn-primary input-group-text user-select-none pe-none">
                    <h3 class="m-0">
                      <i class="bi bi-person" id="user-icon"></i>
                    </h3>
                  </button>
                </div>
              </div>
            </div>
            <!-- password -->
            <div class="row mb-3">
              <label for="password" class="col-sm-3 col-md-2 col-form-label text-muted">رمز عبور</label>
              <div class="col-sm-9 col-md-10">
                <div class="input-group">
                  <input type="password" dir="ltr" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password">
                  <?php if($errors->has('password')): ?>
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                  <?php endif; ?>
                  <button type="button" class="btn btn-primary input-group-text" onclick="showPassword()">
                    <h3 class="m-0">
                      <i class="bi bi-eye-slash" id="password-icon"></i>
                    </h3>
                  </button>
                </div>
              </div>
            </div>
            <!-- submit -->
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

<?php echo $__env->make('layout.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dental/resources/views/pages/login.blade.php ENDPATH**/ ?>