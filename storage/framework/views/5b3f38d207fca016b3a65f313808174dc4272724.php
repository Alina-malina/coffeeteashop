

<?php $__env->startSection('title', 'Корзина' ); ?>

<?php $__env->startSection('content'); ?>

    <div class="container py-1 pb-120">
        <div class="container px-5">
<?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border-bottom border-top">
                <div class="card-body p-4">

                    <div class="row d-flex justify-content-between align-items-center ">                        
                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <a href="<?php echo e(route('product', ['categories', $product->category->code,$product->code])); ?>" alt="">
                            <img src="img_app/product/origin/<?php echo e($product->image); ?>" class="img-fluid " alt="Товар <?php echo e($product->name); ?>"></a>
                        </div>

                        <div class="col-md-10 col-lg-10 col-xl-10">
                            <div class="text-end">
                                                                    
                    <form action="<?php echo e(route('basket-remove', $product)); ?>"  method="POST">  
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                                <button type="submit" class="btn-close">
                                    <span>&#10005;</span>
                                </button>
                    </form> 
                            </div>

                            <div class="text-start">
                                <p class="lead mb-2 lightgray fst-italic fw-300 fs-20"><?php echo e($product->sub_name); ?></p>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div><span class="black fst-normal fw-700 fs-25"><?php echo e($product->name); ?></span></div>

                                <div class="d-flex">
                                    
                    <form action="<?php echo e(route('basket-add', $product)); ?>"  method="POST">  
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                                    <button class="btn btn-counter w-35 h-35"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="bi bi-dash"></i>
                                    </button>
                    </form> 

                                    <input id="form1" min="0" name="quantity" value="<?php echo e($product->pivot->quantity); ?>" type="number"
                                        class="form-control form-control-sm fs-17 black fw-400 w-60 border-0 text-center" />
                                        

                    <form action="<?php echo e(route('basket-add', $product)); ?>"  method="POST">  
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                                    <button class="btn btn-counter w-35 h-35"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="bi bi-plus"></i>
                                    </button>
                    </form> 
                                </div>

                                <div class="offset-lg-1">
                                   <!-- <h5 class="mb-0 lightbrown fw-600 fs-24 fst-normal"><?php echo e($product->price); ?> ₽ (за шт.) </h5> -->
                                    <h5 class="mb-0 lightbrown fw-600 fs-24 fst-normal"><?php echo e($product->getPriceForCount()); ?> ₽ </h5>
                                </div>
                                <div>&nbsp;</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="pb-120">&nbsp;</div>

            <div class="d-flex justify-content-around align-self-center">
                <div class="fw-400 fs-24 fstl-normal black">Итог</div>
                <div>
                    <h5 class="mb-0 lightbrown fw-600 fs-24 fst-normal"><?php echo e($order->getFullPrice()); ?> ₽</h5>
                </div>
                <div><a href="<?php echo e(route('basket-place')); ?>" alt="В корзину"
                        class="btn-link prl-35 pbt-20 upcase fw-500 white fs-18 text-decoration-none border-radius-5 morelightgra bg-brown">
                        Оформить заказ</a></div>
            </div>
        </div>
    </div>

    <div class="clearfixfull">&nbsp;</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/basket.blade.php ENDPATH**/ ?>