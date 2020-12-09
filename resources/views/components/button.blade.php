<button{!! $attrs ? ' '.$attrs:'' !!} type="{!! $type !!}" name="{!! $name !!}" id="{!! $id !!}" class="btn {!! $color !!}{!! $class? ' '.$class :'' !!}"
@if(isset($dataattr) && count($dataattr))
    @foreach($dataattr as $key=>$item)
        data-{!! $key !!}="{!! $item !!}"
    @endforeach
@endif
>{!! $text ? $text : $slot !!}</button>
