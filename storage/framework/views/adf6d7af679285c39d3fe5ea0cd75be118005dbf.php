            <div class="col m-20 d d-flex flex-column unsafe-center border border-2 border-radius-10">
                <img src="<?php echo e(url('img_app/product/origin/' . $product->image)); ?>" title="Товар 1" class="w-340 h-314" />
                <h4 class="mb-0 lh-22 pl-14 pt-50 fs-20 fw-700 black">
                    <a href="<?php echo e(route('product', ['categories',$product->category->code, $product->code])); ?>" alt="Подробнее" class="brown link-name text-decoration-none">
                    <?php echo e($product->name); ?> (<?php echo e($product->category->name); ?>)
                    </a>
                </h4>
                <h3 class="pt-5px mb-0 lh-22 pl-14 fs-17 fw-300 lightgray fst-italic">           
                <?php echo e($product->subname); ?> </h3>
                <p class="pt-15 mb-0 lh-22 pl-14  fs-15 fw-300 darkblack fst-normalc align-center">
                    <?php echo e($product->description); ?>

                </p>

                <h3 class="pt-50 mb-0 lh-22 pl-14  fs-15 fw-700 lightbrown fst-normal"><?php echo e($product->price); ?> ₽</h3>

                <p class="pt-20 pb-2">
                    <form action="<?php echo e(route('basket-add', $product)); ?>"  method="POST">
                    <?php echo method_field('POST'); ?>
                    <button type="submit" title="Корзина"
                        class="btn-basket"><i class="bi bi-cart3 w-20 h-20"></i>
                    </button> 
                    <?php echo csrf_field(); ?> 
                    </form>                
                </p>
            </div><?php /**PATH C:\OpenServer\domains\coffeetea_app\resources\views/layouts/cart.blade.php ENDPATH**/ ?>