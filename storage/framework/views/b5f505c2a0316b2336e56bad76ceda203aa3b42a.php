

<?php $__env->startSection('konten'); ?>
  <h4 class="text-center">Selamat Datang <b><?php echo e(Auth::user()->name); ?></b></h4>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\File\DOT\test-DOT\resources\views/home.blade.php ENDPATH**/ ?>