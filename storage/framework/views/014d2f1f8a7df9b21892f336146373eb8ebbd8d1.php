

<?php $__env->startSection('title', 'Оформить заказ'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container pt-130 pb-51" id="coffee">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">Оформить заказ</h2>
    </div>

    <div class="container py-1 pb-120">
        <div class="container pf-20">

            <div class="d-flex flex-column align-items-center">
                <p>Общая стоимость заказа: <b><?php echo e($order->getFullPrice()); ?></b> руб.</p>
                <div class="pb-60 d-flex align-items-start"><p class="align-left fst-normal fw-600 fs-25 lh-30">Укажите информацию для доставки</p></div>
                <div class="d-flex flex-row mb-20 align-items-md-start">
                    <div class="pl-8 align-items-center">
                        <form action="<?php echo e(route('basket-confirm')); ?>" method="POST" class="row g-3 pb-51">
                        <div class="col-md-4">
                                <p class="form-p-label">Имя</p>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-4">
                                <p class="form-p-label">Телефон</p>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="col-md-4">
                                <p class="form-p-label">Населенный пункт</p>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>

                            <div class="col-md-4">
                                <p class="form-p-label">Адрес доставки</p>
                            </div>
                            <div class="col-md-8">
                                <label for="inputaddressstreet" class="form-label input-label">Улица, дом,
                                    корпус/строение</label>
                                <input type="text" class="form-control" id="street" name="street" required>
                            </div>
                            <div class="col-md-4">
                                <p>&nbsp;</p>
                            </div>
                                <div class="col-md-8 d-flex flex-row align-content-between">
                                    <div><label for="inputaddresssInfo1" class="form-label input-label">Подъезд</label>
                                        <input type="text" class="form-control" id="entrance" name="entrance">
                                    </div>
                                    <div class="pl-10"><label for="inputaddresssInfo2" class="form-label input-label">Этаж</label>
                                        <input type="number" class="form-control" id="floor" name="floor" min="1">
                                    </div>
                                    <div class="pl-10"><label for="inputaddresssInfo3" class="form-label input-label">Квартира</label>
                                        <input type="number" class="form-control" id="flat" name="flat" required>
                                    </div>
                                    <div class="pl-10"><label for="inputaddresssInfo4" class="form-label input-label">Домофон</label>
                                        <input type="number" class="form-control" id="intercom" name="intercom" maxlength="4">
                                    </div>
                                </div>


                            <div class="col-md-4">
                                <p class="form-p-label">Комментарий</p>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" id="comment" name="comment" rows="7" cols="50"></textarea>
                            </div>
                            <br/>
                            
        <div class=" pt-20 align-items-center">
            <?php echo csrf_field(); ?>
            <input type="submit" 
                class="btn-link prl-35 pbt-20 upcase fw-500 white fs-18 text-decoration-none border-radius-5 morelightgra bg-brown" value="Оформить заказ">
            </div>
                        </form>
                </div>
            </div>
</div>
        </div>
    </div>

    <div class="pb-120">&nbsp;</div>


    <div class="clearfixfull">&nbsp;</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/order.blade.php ENDPATH**/ ?>