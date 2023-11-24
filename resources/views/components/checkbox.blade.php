<div class="form-check mb-3">
    <input class="form-check-input" id="{{ $id ?? 'checkInput' }}" type="checkbox" @isset($name) name="{{$name}}" @endisset />
    <label class="form-check-label" for="{{ $id ?? 'checkInput' }}">{{ $slot }}</label>
</div>
