<div class="form-floating mb-3">
    <input
        class="form-control"
        id="inputEmail"
        type="{{ isset($type) ? $type : 'text' }}"

        @isset($name)
        name="{{ $name }}"
        value="{{ old($name) }}"
        @endisset
    />

    @isset($label)
        <label for="inputEmail">{{ $label }}</label>
    @endisset

    @isset($name)
        @error($name)
            <p class="text-danger">{{ $message }}</p>
        @enderror
    @endisset
</div>
