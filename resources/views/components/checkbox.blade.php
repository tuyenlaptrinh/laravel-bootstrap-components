@if(!$only)
<div class="form-check{!! $rootClass ? ' '.$rootClass:'' !!}">
@endif
    <input{!! $value ? ' value="'.$value.'"':'' !!} class="form-check-input{!! $class ? ' '.$class:'' !!}" type="checkbox" name="{!! $name ? $name : '' !!}" id="{!! $id !!}"{!! $checked ? ' checked':'' !!}>
    @if($label)
    <label class="form-check-label" for="{!! $id !!}">
        {!! $label !!}
    </label>
    @endif
    @if($help && !$only)
        <div class="form-text text-muted">{!! $help !!}</div>
    @endif
@if(!$only)
</div>
@endif
