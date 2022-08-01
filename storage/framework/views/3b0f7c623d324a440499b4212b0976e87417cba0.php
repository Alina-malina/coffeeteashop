    <!-- навигация -->
    <nav>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-5 mb-2">
                <div class="col-md-3 text-end w-40 h-40">
                    <a href="<?php echo e(route('index')); ?>" title="лого"><img src="/img_app/logo_header.svg" alt="CoffeeTea"></a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="<?php echo e(route('index')); ?>" class="nav-link px-2 link-dark">Главная</a></li>
                    <li><a href="<?php echo e(url('/categories/coffee')); ?>" class="nav-link px-84 link-dark">Кофе</a></li>
                    <li><a href="<?php echo e(url('/categories/tea')); ?>" class="nav-link px-2 link-dark">Чай</a></li>
                </ul>
                  

                <div class="col-md-3 text-end w-40 h-40">
                    <a href="<?php echo e(route('basket')); ?>" title="Корзина"><img src="/img_app/icons/icon0.png" alt="Корзина"></a>
                </div>
            </header>
        </div>
    <nav><?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/layouts/header.blade.php ENDPATH**/ ?>