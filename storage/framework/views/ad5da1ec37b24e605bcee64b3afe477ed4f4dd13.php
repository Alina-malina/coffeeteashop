   <!-- футер -->
   <footer class="bg-brown">
        <div
            class="container d-flex flex-wrap flex-xs-top justify-content-md-between py-5 mb-2 ">
            <div class="pt-50 col-md-3 text-start">
                <div class="w-40 h-40">
                    <a href="<?php echo e(route('index')); ?>" title="Корзина"><img src="/img_app/logo_footer.svg" alt="CoffeeTea"></a>
                </div>
                <h3 class="pt-20 fst-normal fs-20 lh-24 fw-500 white pl-50">8 900 000 00 00</h3>
                <p class="pt-2px fst-normal fs-18 fw-300 white pl-50">10:00 - 22:00</p>
            </div>

            <div class="pt-50 col-md-3 text-start">
                <h3 class="fst-normal fs-18 lh-22 fw-600 white">Клиентам</h3>
                <p class="pt-25"><a href="<?php echo e(route('delivery')); ?>" alt="Главная" class="fst-normal fs-14 lh-17 fw-500 white">Доставка и оплата</a></p>
            </div>

            <div class="pt-50 col-md-3 text-start">
                <h3 class="fst-normal fs-18 lh-22 fw-600 white">Категории</a></h3>
                <p class="pt-25 "><a href="<?php echo e(route('index')); ?>" alt="Главная" class="fst-normal fs-14 lh-17 fw-500 white">Главная</a></p>
                <p class="pt-7 "><a href="<?php echo e(url('/categories/coffee')); ?>" alt="Кофе" class="fst-normal fs-14 lh-17 fw-500 white">Кофе</a></p>
                <p class="pt-7 "><a href="<?php echo e(url('/categories/tea')); ?>" alt="Чай" class="fst-normal fs-14 lh-17 fw-500 white">Чай</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/layouts/footer.blade.php ENDPATH**/ ?>