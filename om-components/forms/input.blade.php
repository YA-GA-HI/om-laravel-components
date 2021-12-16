<div class="input-form">
  @php ($placeholdertext = isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar' ? $ar : $placeholder )
  <input name="{{ $name }}" type="{{$type}}" placeholder="{{$placeholdertext }}" value="{{ old($name) ?? $value }}" {{  $required=="true" ?"required"  : "" }} >
  @error($name)
    <div class="error">{{ $message }}</div>
  @enderror
</div>
