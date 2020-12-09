<div class="modal fade{!! $class ? ' '.$class:'' !!}"{!! $static ? ' data-bs-backdrop="static" data-bs-keyboard="false"':'' !!} tabindex="-1" id="{!! $id !!}">
    <div class="modal-dialog{!! $scroll ? ' modal-dialog-scrollable':'' !!}{!! $center ? ' modal-dialog-centered':'' !!}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {!! $slot !!}
        </div>
    </div>
</div>
