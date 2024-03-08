<div class="mb-3">
    <label class="col-form-label pt-0" for="{{ $name }}">{{ $label }}</label>
    <input {{ $key }} class="form-control {{ $class }}  @error($name) is-invalid @enderror"
        id="{{ $id ?? '' }}" type="{{ $type }}" name="{{ $name }}" placeholder=""
        value="{{ $value ?? '' }}">
    @error($name)
        <div class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </div>
    @enderror
</div>
