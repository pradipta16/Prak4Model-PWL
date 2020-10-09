<?php $__env->startSection('section'); ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Welcome, Backpacker !</h1>
            <span class="subheading">never stop exploring the world</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
<div class="container">
    <div class="row col-md-12">
        <div class="card-group">
            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <img class="card-img-top" src="img/about-bg.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><?php echo e($a -> title); ?></h5>
                <p class="card-text"><?php echo e($a -> excerpt); ?></p>
                <a href="/article/<?php echo e($a->id); ?>">Readmore</a>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated <?php echo e($a -> created_at); ?></small>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\cms\resources\views/home1.blade.php ENDPATH**/ ?>