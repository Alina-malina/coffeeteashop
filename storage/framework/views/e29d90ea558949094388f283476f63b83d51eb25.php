

<?php $__env->startSection('title', 'Категория товара '); ?>

<?php $__env->startSection('content'); ?>

<?php if($category->code == 'coffee'): ?>
    
<!-- Coffees -->
    <div class="container pt-160 pb-51" id="coffee">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">Кофе</h2>
    <p>Всего товаров: <?php echo e($category->products->count()); ?></p>
    </div>

    <div class="row justify-content-lg-between">
   <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('layouts.cart', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <!-- Tea  -->
<?php elseif($category->code == 'tea'): ?>
    <div class="container pt-160 pb-51" id="tea">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">Чай</h2>
    </div>
    
    <div class="row justify-content-lg-between">
     <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('layouts.cart', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/category.blade.php ENDPATH**/ ?>