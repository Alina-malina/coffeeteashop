<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($order->name) ? $order->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($order->phone) ? $order->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="control-label">{{ 'City' }}</label>
    <input class="form-control" name="city" type="text" id="city" value="{{ isset($order->city) ? $order->city : ''}}" >
    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
    <label for="street" class="control-label">{{ 'Street' }}</label>
    <input class="form-control" name="street" type="text" id="street" value="{{ isset($order->street) ? $order->street : ''}}" >
    {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entrance') ? 'has-error' : ''}}">
    <label for="entrance" class="control-label">{{ 'Entrance' }}</label>
    <input class="form-control" name="entrance" type="number" id="entrance" value="{{ isset($order->entrance) ? $order->entrance : ''}}" >
    {!! $errors->first('entrance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('floor') ? 'has-error' : ''}}">
    <label for="floor" class="control-label">{{ 'Floor' }}</label>
    <input class="form-control" name="floor" type="number" id="floor" value="{{ isset($order->floor) ? $order->floor : ''}}" >
    {!! $errors->first('floor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('flat') ? 'has-error' : ''}}">
    <label for="flat" class="control-label">{{ 'Flat' }}</label>
    <input class="form-control" name="flat" type="number" id="flat" value="{{ isset($order->flat) ? $order->flat : ''}}" >
    {!! $errors->first('flat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('intercom') ? 'has-error' : ''}}">
    <label for="intercom" class="control-label">{{ 'Intercom' }}</label>
    <input class="form-control" name="intercom" type="number" id="intercom" value="{{ isset($order->intercom) ? $order->intercom : ''}}" >
    {!! $errors->first('intercom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
    <label for="comment" class="control-label">{{ 'Comment' }}</label>
    <textarea class="form-control" rows="5" name="comment" type="textarea" id="comment" >{{ isset($order->comment) ? $order->comment : ''}}</textarea>
    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
