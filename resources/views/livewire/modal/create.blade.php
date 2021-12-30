<!-- Button trigger modal -->
<button type="button" wire:click.prevent="create" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
<i class="fa fa-edit"></i> Create   {{$model}}
</button>
  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="createModalLabel">Modal Create {{$model}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @include('livewire.modal.message')
            @include($form)
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" wire:click.prevent="store()" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>