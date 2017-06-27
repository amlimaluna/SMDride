@if($errors->has($input))
    <span class="help-block text-red">
        {{  $errors->first($input) }}
    </span>
@endif