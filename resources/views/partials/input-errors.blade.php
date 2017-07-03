@if($errors->has($input))
    <span class="help-block text-red" style="color: red">
        {{  $errors->first($input) }}
    </span>
@endif