<div {{ $attributes->merge(['class' => 'modal fade']) }} tabindex="-1" aria-labelledby="{{ $modalTitle }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        {{ $modalTitle }}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
    <div class="modal-body">
      {{ $slot }}
    </div>
    <div class="modal-footer">
      <div class="col-12">
      {{ $modalFooter }}
      </div>
    </div>
  </div>
</div>
