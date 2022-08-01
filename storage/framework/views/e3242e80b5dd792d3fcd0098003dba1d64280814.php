<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($category->name) ? $category->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('code') ? 'has-error' : ''); ?>">
    <label for="code" class="control-label"><?php echo e('Code'); ?></label>
    <input class="form-control" name="code" type="text" id="code" value="<?php echo e(isset($category->code) ? $category->code : ''); ?>" >
    <?php echo $errors->first('code', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
    <label for="description" class="control-label"><?php echo e('Description'); ?></label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" ><?php echo e(isset($category->description) ? $category->description : ''); ?></textarea>
    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH C:\OpenServer\domains\coffeetea_app\resources\views/admin/categories/form.blade.php ENDPATH**/ ?>