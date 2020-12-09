@if(!$only)
<div class="mb-3{!! $rootClass ? ' '.$rootClass:'' !!}">
@endif
    @if($label && !$only)
    <label for="{!! $id !!}">{!! $label !!}</label>
    @endif
    <select{!! $required ? ' required':'' !!}{!! $attrs ? ' '.$attrs:'' !!} name="{!! $name ? $name: '' !!}" id="{!! $id !!}" class="form-select{!! $class ? ' '.$class:'' !!}"{!! $multi ? ' '.$multi:'' !!}
    @if(isset($dataattr) && count($dataattr))
        @foreach($dataattr as $key=>$item)
            data-{!! $key !!}="{!! $item !!}"
        @endforeach
    @endif
    >
        @if(isset($options) && is_array($options) && count($options))
            @foreach($options as $key => $option)
                <option value="{!! $key !!}"{!! $key == $value ? ' selected':'' !!}>{!! $option !!}</option>
            @endforeach
        @else
            {!! $slot !!}
        @endif
    </select>
    @if($help && !$only)
        <div class="form-text">{!! $help !!}</div>
    @endif
@if(!$only)
</div>
@endif
