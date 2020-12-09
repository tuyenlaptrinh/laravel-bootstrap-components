@if(!$only)
<div class="mb-3{!! $rootClass ? ' '.$rootClass:'' !!}">
@endif
    @if($label && !$only)
        <label for="{!! $id !!}" class="form-label">{!! $label !!}</label>
    @endif
    <input{!! $required ? ' required':'' !!}{!! $attrs ? ' '.$attrs:'' !!} name="{!! $name ? $name : '' !!}" value="{!! $value ? $value :'' !!}" type="{!! $type !!}" class="form-control{!! $class ? ' '.$class:'' !!}" id="{!! $id !!}" placeholder="{!! $place ? $place :'' !!}"
    @if(isset($dataattr) && count($dataattr))
        @foreach($dataattr as $key=>$item)
            data-{!! $key !!}="{!! $item !!}"
        @endforeach
    @endif
    >
    @if($help && !$only)
        <div class="form-text">{!! $help !!}</div>
    @endif
@if(!$only)
</div>
@endif
