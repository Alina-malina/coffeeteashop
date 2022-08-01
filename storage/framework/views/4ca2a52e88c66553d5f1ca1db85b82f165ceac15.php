<?php $__env->startSection('title',  config('app.name', 'Laravel') ); ?>

<?php $__env->startSection('content'); ?>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3 fw-700 fs-55 fstl-normal lh-67 pb-30 black">Лучшее кофе и<br>чай
                            для Вас!</h1>
                        <p class="lead mb-5 fw-500 fs-30 fstl-normal lh-37 pb-51 black">Мы предоставляем только<br>
                            высококачественные кофе и чаи,<br>чтобы Вы могли наслаждаться<br>прекрасным вкусом каждый
                            день</p>
                        <p class="green fw-700 fs-30 fstl-normal lh-37 upcase">Бесплатная доставка от 1000 ₽</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup w-436 h-326">
                        <img src="/img_app/main/pngmain.png" alt="Корзина">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- catalog links -->
    <aside class="text-center bg-brown">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-6">
                    <a href="<?php echo e(url('/categories/coffee')); ?>" alt="каталог кофе"
                        class="link-white text-decoration-none upcase fw-600 lh-30 fs-24">каталог кофе</a>
                </div>
                <div class="col-xl-6">
                    <a href="<?php echo e(url('/categories/tea')); ?>" alt="каталог чая"
                        class="link-white text-decoration-none upcase fw-600 lh-30 fs-24">каталог чая</a>
                </div>
            </div>
        </div>
    </aside>
    <!-- advantages -->
    <div class="container pt-160 pb-51" id="icon-grid">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">наши преимущества</h2>
    </div>
    <div class="full-width pb-170">
        <div
            class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5 pb-51 border-3 border-bottom border-top px-5 justify-content-lg-between">
            <div class="col d-flex align-items-center">
                <svg class="w-60 h-60">
                    <image xlink:href="/img_app/icons/icon1.svg" src="/img_app/icons/icon1.png" class="w-60 h-60" />
                </svg>
                <div>
                    <h4 class="fw-600 mb-0 fs-18 lh-22 pl-14">Широкий ассортимент</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <svg class="w-60 h-60">
                    <image xlink:href="/img_app/icons/icon2.svg" src="/img_app/icons/icon2.png" class="w-60 h-60" />
                </svg>
                <div>
                    <h4 class="fw-600 mb-0 fs-18 lh-22 pl-14">Выгодные цены</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <svg class="w-60 h-60">
                    <image xlink:href="/img_app/icons/icon3.svg" src="/img_app/icons/icon3.png" class="w-60 h-60" />
                </svg>
                <div>
                    <h4 class="fw-600 mb-0 fs-18 lh-22 pl-14">Бесплатная доставка от 1000 ₽</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <svg class="w-60 h-60">
                    <image xlink:href="/img_app/icons/icon4.svg" src="/img_app/icons/icon4.png" class="w-60 h-60" />
                </svg>
                <div>
                    <h4 class="fw-600 mb-0 fs-18 lh-22 pl-14">Сертификат качества</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- hits -->
    <div class="container pt-160 pb-51" id="product-hits">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">хиты продаж</h2>
    </div>

    <div class="row justify-content-lg-between">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('layouts.cart', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/index.blade.php ENDPATH**/ ?>