<div {{ $attributes->merge(['class' => 'modal']) }}>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        {{ $modalTitle }}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      {{ $slot }}
    </div>
  </div>
</div>
