@if(!$only)
    <div class="mb-3{!! $rootClass ? ' '.$rootClass:'' !!}">
        @endif
        @if($label && !$only)
            <label for="{!! $id !!}" class="form-label">{!! $label !!}</label>
        @endif
        <textarea{!! $required ? ' required':'' !!}{!! $attrs ? ' '.$attrs:'' !!} name="{!! $name ? $name : '' !!}" type="{!! $type !!}" class="form-control{!! $class ? ' '.$class:'' !!}" id="{!! $id !!}" placeholder="{!! $place ? $place :'' !!}">{!! $value ? $value :'' !!}</textarea>
        @if($help && !$only)
            <small class="form-text text-muted">{!! $help !!}</small>
        @endif
        @if(!$only)
    </div>
@endif
