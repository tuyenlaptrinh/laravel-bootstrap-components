<div class="alert{!! $close ? ' alert-dismissible':'' !!} fade show{!! $class ? ' '.$class:'' !!}{!! $type ? ' '.$type:'' !!}"{!! $attrs ? ' '.$attrs:'' !!}>
    {!! $content ? $content : $slot !!}
    @if($close)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
