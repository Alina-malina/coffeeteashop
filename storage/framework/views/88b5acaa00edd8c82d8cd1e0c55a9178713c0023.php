<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">
    <label for="image" class="control-label"><?php echo e('Image'); ?></label>
    <input type="file" name="image" id="image" placeholder="Выберите файл">
    
    <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($product->name) ? $product->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('category_id') ? 'has-error' : ''); ?>">
    <label for="category_id" class="control-label"><?php echo e('Category Id'); ?></label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="<?php echo e(isset($product->category_id) ? $product->category_id : ''); ?>" >
    <?php echo $errors->first('category_id', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('sub_name') ? 'has-error' : ''); ?>">
    <label for="sub_name" class="control-label"><?php echo e('Sub Name'); ?></label>
    <input class="form-control" name="sub_name" type="text" id="sub_name" value="<?php echo e(isset($product->sub_name) ? $product->sub_name : ''); ?>" >
    <?php echo $errors->first('sub_name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
    <label for="description" class="control-label"><?php echo e('Description'); ?></label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" ><?php echo e(isset($product->description) ? $product->description : ''); ?></textarea>
    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
    <label for="quantity" class="control-label"><?php echo e('Quantity'); ?></label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="<?php echo e(isset($product->quantity) ? $product->quantity : ''); ?>" >
    <?php echo $errors->first('quantity', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('price') ? 'has-error' : ''); ?>">
    <label for="price" class="control-label"><?php echo e('Price'); ?></label>
    <input class="form-control" name="price" type="number" id="price" value="<?php echo e(isset($product->price) ? $product->price : ''); ?>" >
    <?php echo $errors->first('price', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('weight') ? 'has-error' : ''); ?>">
    <label for="weight" class="control-label"><?php echo e('Weight'); ?></label>
    <input class="form-control" name="weight" type="number" id="weight" value="<?php echo e(isset($product->weight) ? $product->weight : ''); ?>" >
    <?php echo $errors->first('weight', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH /Applications/MAMP/htdocs/Coffeetea/resources/views/admin/products/form.blade.php ENDPATH**/ ?>