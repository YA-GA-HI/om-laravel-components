<div class="input-form">
  @php ($placeholdertext = isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar' ? $ar : $placeholder )
  <textarea rows="4" name="{{ $name }}" type="{{$type}}" placeholder="{{$placeholdertext }}" {{  $required=="true" ?"required"  : "" }} >{{ old($name) ?? $value }} </textarea>
  @error($name)
    <div class="error">{{ $message }}</div>
  @enderror
</div>
