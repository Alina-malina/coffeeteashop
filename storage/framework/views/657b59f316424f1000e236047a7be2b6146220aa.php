<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($order->name) ? $order->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
    <label for="phone" class="control-label"><?php echo e('Phone'); ?></label>
    <input class="form-control" name="phone" type="text" id="phone" value="<?php echo e(isset($order->phone) ? $order->phone : ''); ?>" >
    <?php echo $errors->first('phone', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>">
    <label for="city" class="control-label"><?php echo e('City'); ?></label>
    <input class="form-control" name="city" type="text" id="city" value="<?php echo e(isset($order->city) ? $order->city : ''); ?>" >
    <?php echo $errors->first('city', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('street') ? 'has-error' : ''); ?>">
    <label for="street" class="control-label"><?php echo e('Street'); ?></label>
    <input class="form-control" name="street" type="text" id="street" value="<?php echo e(isset($order->street) ? $order->street : ''); ?>" >
    <?php echo $errors->first('street', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('entrance') ? 'has-error' : ''); ?>">
    <label for="entrance" class="control-label"><?php echo e('Entrance'); ?></label>
    <input class="form-control" name="entrance" type="number" id="entrance" value="<?php echo e(isset($order->entrance) ? $order->entrance : ''); ?>" >
    <?php echo $errors->first('entrance', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('floor') ? 'has-error' : ''); ?>">
    <label for="floor" class="control-label"><?php echo e('Floor'); ?></label>
    <input class="form-control" name="floor" type="number" id="floor" value="<?php echo e(isset($order->floor) ? $order->floor : ''); ?>" >
    <?php echo $errors->first('floor', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('flat') ? 'has-error' : ''); ?>">
    <label for="flat" class="control-label"><?php echo e('Flat'); ?></label>
    <input class="form-control" name="flat" type="number" id="flat" value="<?php echo e(isset($order->flat) ? $order->flat : ''); ?>" >
    <?php echo $errors->first('flat', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('intercom') ? 'has-error' : ''); ?>">
    <label for="intercom" class="control-label"><?php echo e('Intercom'); ?></label>
    <input class="form-control" name="intercom" type="number" id="intercom" value="<?php echo e(isset($order->intercom) ? $order->intercom : ''); ?>" >
    <?php echo $errors->first('intercom', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>">
    <label for="comment" class="control-label"><?php echo e('Comment'); ?></label>
    <textarea class="form-control" rows="5" name="comment" type="textarea" id="comment" ><?php echo e(isset($order->comment) ? $order->comment : ''); ?></textarea>
    <?php echo $errors->first('comment', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/admin/orders/form.blade.php ENDPATH**/ ?>