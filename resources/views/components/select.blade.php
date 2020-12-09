@if(!$only)
<div class="mb-3{!! $rootClass ? ' '.$rootClass:'' !!}">
@endif
    @if($label && !$only)
    <label for="{!! $id !!}">{!! $label !!}</label>
    @endif
    <select{!! $attrs ? ' '.$attrs:'' !!} name="{!! $name ? $name: '' !!}" id="{!! $id !!}" class="form-select{!! $class ? ' '.$class:'' !!}"{!! $multi ? ' '.$multi:'' !!}>
        @foreach($options as $key => $option)
            <option value="{!! $key !!}"{!! $key == $value ? ' selected':'' !!}>{!! $option !!}</option>
        @endforeach
    </select>
    @if($help && !$only)
        <small class="form-text text-muted">{!! $help !!}</small>
    @endif
@if(!$only)
</div>
@endif
