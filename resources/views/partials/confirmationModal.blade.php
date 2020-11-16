<div class="modal fade confirmationModal" id="{{ $modalID ?? "confirmationModal" }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{ $title ?? "Confirmation modal" }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>{!! $message ?? "Do you confirm?" !!}</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn {{ $buttonClass ?? 'btn-primary' }}" id="confirmBtn">{{ $buttonText ?? "Confirm" }}</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
