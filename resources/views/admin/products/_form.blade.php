<div class="row">
    <div class="col-md-8">
        <div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <span class="input-group-addon">
                <label class="largura-label" for="name"><strong>Name: * </strong></label>
            </span>
            <input type="text" class="form-control" name="name" id="name"
                   value="{{ old('name', $product->name)}}" maxlength="127" required>
        </div>
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="col-md-4">
        <div class="input-group {{ $errors->has('price') ? 'has-error' : '' }}">
            <span class="input-group-addon">
                <label class="largura-label" for="price"><strong>Price: * </strong></label>
            </span>
            <input type="number" class="form-control" name="price" id="price"
                   value="{{ old('name', $product->price)}}" required>
        </div>
        <span class="text-danger">{{ $errors->first('price') }}</span>
    </div>
</div>
