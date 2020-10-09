<?php $__env->startSection('section'); ?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo e($article -> title); ?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p><?php echo e($article -> body); ?></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\cms\resources\views/detailPost.blade.php ENDPATH**/ ?>