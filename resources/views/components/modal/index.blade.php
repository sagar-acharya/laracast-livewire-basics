<!-- Modal -->
<div
    x-cloak
    x-data="{ open: false }"
    x-modelable="open"
    class="modal fade"
    id="exampleModalCenter"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenter"
    aria-hidden="true"
    x-bind:class="
        {
            'animate__animated animate__fadeInDown animate__faster show': open,
            'animate__animated animate__fadeOutUp': !open
        }
    "
    aria-modal="true"
    {{-- @keydown.escape.window="open = false" --}}
    {{ $attributes }}
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
