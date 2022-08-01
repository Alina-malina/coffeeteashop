    <!-- Navigation-->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-5 mb-2">
            <div class="col-md-3 text-end w-40 h-40">
                <a href="<?php echo e(route('index')); ?>" title="Корзина"><img src="/img_app/logo_header.svg" alt="CoffeeTea"></a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?php echo e(route('index')); ?>" class="nav-link px-2 link-dark">Главная</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-84 link-dark" href="#" id="navbarDarkDropdownMenuLink1"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Кофе
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light border-radius-10 box-shadow-menu"
                        aria-labelledby="navbarDarkDropdownMenuLink1">
                        <li><a class="dropdown-item  padding-submenu fs-20 middlegray border-bottom border-1"
                                href="<?php echo e(url('/categories/coffee')); ?>">Плантационный</a></li>
                        <li><a class="dropdown-item padding-submenu fs-20 middlegray" href="<?php echo e(url('/categories/coffee')); ?>">Ароматизированный</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-2 link-dark" href="#" id="navbarDarkDropdownMenuLink2"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Чай
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light border-radius-10 box-shadow-menu"
                        aria-labelledby="navbarDarkDropdownMenuLink2">
                        <li><a class="dropdown-item padding-submenu fs-20 middlegray border-bottom border-1"
                                href="<?php echo e(url('/categories/tea')); ?>">Черный</a></li>
                        <li><a class="dropdown-item padding-submenu fs-20 middlegray" href="<?php echo e(url('/categories/tea')); ?>">Зеленый</a></li>
                    </ul>
                </li>
            </ul>

            <div class="col-md-3 text-end w-40 h-40">
                <a href="<?php echo e(route('basket')); ?>" title="Корзина"><img src="/img_app/icons/icon0.png" alt="Корзина"></a>
            </div>
        </header>
    </div><?php /**PATH C:\OpenServer\domains\coffeetea_app\resources\views/layouts/header.blade.php ENDPATH**/ ?>