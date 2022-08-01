

<?php $__env->startSection('title', 'Все категории' ); ?>

<?php $__env->startSection('content'); ?>


    <div class="container pt-160 pb-51" id="coffee">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">Категории</h2>
    </div>

    <div class="full-width py-1 pb-120">
        <div class="row justify-content-lg-between">

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col m-20 d d-flex flex-column unsafe-center border border-2 border-radius-10">
                <img src="/img_app/product/6.png" title="Товар 1" class="w-340 h-314" />
                <h4 class="mb-0 lh-22 pl-14 pt-50 fs-20 fw-700 black"><?php echo e($category->name); ?></h4>
                <p class="pt-15 mb-0 lh-22 pl-14  fs-15 fw-300 darkblack fst-normalc align-center">
                    <?php echo e($category->description); ?>

                </p>
                <p class="pt-20 pb-2">
                    <p class="pt-50"><a href="/categories/<?php echo e($category->code); ?>" alt="Каталог <?php echo e($category->name); ?>" class="btn-link prl-35 pbt-20 upcase fw-500 white fs-24 text-decoration-none border-radius-5 morelightgra bg-brown">
                        Подробнее
                    </a></p>
                </p>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\coffeetea_app\resources\views/categories.blade.php ENDPATH**/ ?>